<?php
// scripts/generate-since-suggestions.php
// Generate per-entity (class/function/method) @since suggestions using git history.
// Output: since-entities.json in repo root.

/**
 * runCmd
 *
 * @since v1.0.5 2026-04-14
 * @param string $cmd
 * @return void
 */
function runCmd(string $cmd) {
    // debug: print the command being executed
    static $count = 0;
    if ($count < 20) {
        echo "RUN: " . $cmd . "\n";
    }
    $count++;
    exec($cmd, $out, $rc);
    return [$out ?? [], $rc ?? 0];
}

// Run command using argument array to avoid shell interpretation (Windows)
/**
 * runCmdArr
 *
 * @since v1.0.5 2026-04-14
 * @param array $argv
 * @return void
 */
function runCmdArr(array $argv) {
    $cmdDisplay = implode(' ', array_map(function($a){ return is_scalar($a)?$a:'<arg>'; }, $argv));
    static $count = 0;
    if ($count < 20) echo "RUN-ARR: " . $cmdDisplay . "\n";
    $count++;
    $descriptorspec = [1 => ['pipe','w'], 2 => ['pipe','w']];
    $process = proc_open($argv, $descriptorspec, $pipes);
    if (!is_resource($process)) return [[], 1];
    $out = stream_get_contents($pipes[1]); fclose($pipes[1]);
    $err = stream_get_contents($pipes[2]); fclose($pipes[2]);
    $rc = proc_close($process);
    $lines = $out === '' ? [] : preg_split('/\r?\n/', trim($out));
    if ($rc !== 0 && $err !== '') {
        $errLines = preg_split('/\r?\n/', trim($err));
        $lines = array_merge($lines, $errLines);
    }
    return [$lines, $rc];
}

list($filesOut, $rc) = runCmd('git ls-files "*.php"');
$files = $rc === 0 ? $filesOut : [];

$composer = @json_decode(@file_get_contents('composer.json'), true);
$defaultTag = isset($composer['version']) ? 'v'.$composer['version'] : 'v0.0.0';

$entities = [];
foreach ($files as $file) {
    $file = trim($file);
    if ($file === '') continue;
    $content = @file_get_contents($file);
    if ($content === false) continue;
    $tokens = token_get_all($content);
    $count = count($tokens);
    $currentClass = null;
    for ($i = 0; $i < $count; $i++) {
        $t = $tokens[$i];
        if (is_array($t) && in_array($t[0], [T_CLASS, T_INTERFACE, T_TRAIT], true)) {
            for ($j = $i+1; $j < $count; $j++) {
                if (is_array($tokens[$j]) && $tokens[$j][0] === T_STRING) {
                    $currentClass = $tokens[$j][1];
                    $line = $tokens[$j][2] ?? null;
                    $entities[] = ['file'=>$file,'type'=>'class','name'=>$currentClass,'line'=>$line];
                    break;
                }
            }
        }
        if (is_array($t) && $t[0] === T_FUNCTION) {
            $name = null;
            for ($j = $i+1; $j < $count; $j++) {
                $tt = $tokens[$j];
                if (is_array($tt) && $tt[0] === T_STRING) { $name = $tt[1]; break; }
                if (is_string($tt) && $tt === '(') break; // anonymous
            }
            if ($name !== null) {
                $nameLine = is_array($tokens[$j]) ? ($tokens[$j][2] ?? null) : null;
                if ($currentClass !== null) {
                    $entities[] = ['file'=>$file,'type'=>'method','name'=>$currentClass.'::'.$name,'line'=>$nameLine];
                } else {
                    $entities[] = ['file'=>$file,'type'=>'function','name'=>$name,'line'=>$nameLine];
                }
            }
        }
        if (is_string($t) && $t === '}') {
            $currentClass = null;
        }
    }
}

$suggestions = [];
foreach ($entities as $ent) {
    $file = $ent['file'];
    $name = $ent['name'];
    $type = $ent['type'];

    $commit = null; $date = null; $tag = null;

    // Prefer git blame on the line where the entity is defined (more reliable)
    $lineNo = $ent['line'] ?? null;
    if ($lineNo) {
        list($out, $rc) = runCmdArr(['git','blame','-L', $lineNo.','.$lineNo, '--line-porcelain', $file]);
        foreach ($out as $l) {
            if (preg_match('/^author-time (\d+)$/', trim($l), $m)) {
                $timestamp = intval($m[1]);
                $date = date('Y-m-d', $timestamp);
            }
            if (preg_match('/^([0-9a-f]{7,40}) /', $l, $m2)) {
                $commit = $m2[1];
            }
        }
    }

    // fallback: search by text occurrence (-S)
    if (!$commit) {
        $search = $name;
        if ($type === 'method') {
            $parts = explode('::', $name);
            $search = $parts[1] ?? $name;
        }
        list($out2, $rc2) = runCmdArr(['git','log','--pretty=format:%H','-S'.$search,'--',$file]);
        if (!empty($out2)) {
            $commit = trim($out2[0]) ?: $commit;
            if ($commit) {
                list($showOut, $showRc) = runCmdArr(['git','show','-s','--format:%ct',$commit]);
                if (!empty($showOut) && is_numeric(trim($showOut[0]))) {
                    $date = date('Y-m-d', intval(trim($showOut[0])));
                }
            }
        }
    }

    // fallback: file creation (get first commit touching the file)
    if (!$commit) {
        list($out3, $rc3) = runCmdArr(['git','log','--diff-filter=A','--pretty=format:%H','--', $file]);
        if (!empty($out3)) {
            $commit = trim(end($out3));
            if ($commit) {
                list($showOut2, $showRc2) = runCmdArr(['git','show','-s','--format:%ct',$commit]);
                if (!empty($showOut2) && is_numeric(trim($showOut2[0]))) {
                    $date = date('Y-m-d', intval(trim($showOut2[0])));
                }
            }
        }
    }

    if ($commit) {
        list($tOut, $tRc) = runCmd('git describe --tags --abbrev=0 ' . escapeshellarg($commit) . ' 2>nul');
        if ($tRc === 0 && !empty($tOut)) $tag = trim($tOut[0]);
    }
    if (!$tag) $tag = $defaultTag;
    if (!$date) $date = date('Y-m-d');

    $suggestions[] = ['file'=>$file,'type'=>$type,'name'=>$name,'commit'=>$commit,'tag'=>$tag,'date'=>$date,'suggestion'=>"@since {$tag} {$date}"];
}

file_put_contents('since-entities.json', json_encode($suggestions, JSON_PRETTY_PRINT));
echo "Wrote since-entities.json (" . count($suggestions) . " entries)\n";
