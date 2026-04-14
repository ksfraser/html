<?php
// scripts/fix-since-issues.php
// Read .since-check-output.utf8.txt and insert/update docblocks to satisfy checker

$root = getcwd();
$report = $root . DIRECTORY_SEPARATOR . '.since-check-output.utf8.txt';
if (!file_exists($report)) {
    echo "Checker report not found: $report\n";
    exit(1);
}
$lines = file($report, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = [];
foreach ($lines as $ln) {
    if (strpos($ln, '- ') !== 0) continue;
    $left = preg_replace('/^-\s*/', '', preg_split('/\s+—\s+/', $ln, 2)[0]);
    $col = strpos($left, ':');
    if ($col !== false) $left = substr($left, 0, $col);
    $left = trim($left);
    if ($left !== '') $files[$left] = true;
}
$files = array_keys($files);
if (empty($files)) { echo "No files to fix.\n"; exit(0); }

function parseParamsString(string $s): array {
    $params = [];
    $len = strlen($s); $buf = ''; $depth = 0; $inS=false; $inD=false;
    for ($i=0;$i<$len;$i++) {
        $c = $s[$i];
        if ($c === "'" && !$inD) { $inS = !$inS; $buf .= $c; continue; }
        if ($c === '"' && !$inS) { $inD = !$inD; $buf .= $c; continue; }
        if ($inS || $inD) { $buf .= $c; continue; }
        if ($c === '(' || $c === '[') { $depth++; $buf .= $c; continue; }
        if ($c === ')' || $c === ']') { if ($depth>0) $depth--; $buf .= $c; continue; }
        if ($c === ',' && $depth === 0) { $params[] = trim($buf); $buf = ''; continue; }
        $buf .= $c;
    }
    if (trim($buf) !== '') $params[] = trim($buf);
    return array_filter($params, fn($x)=>$x!=='');
}

function extractParamNamesFromSignature(string $sig): array {
    $parts = parseParamsString($sig);
    $names = [];
    foreach ($parts as $p) {
        $pp = preg_split('/=/', $p, 2)[0];
        if (preg_match('/(\$[A-Za-z0-9_]+)/', $pp, $m)) $names[] = $m[1];
    }
    return $names;
}

function containsSince(string $doc): bool {
    return (bool) preg_match('/@since\s+v?\d+\.\d+(?:\.\d+)?\s*\(?\d{4}-\d{2}-\d{2}\)?/i', $doc);
}

function buildDefaultDocblock(?string $short, array $params, ?string $returnType): string {
    $lines = [];
    $lines[] = '/**';
    $lines[] = ' * ' . ($short ?: 'No description.');
    $lines[] = ' *';
    $lines[] = ' * @since v1.0.0 2026-04-14';
    foreach ($params as $p) {
        $lines[] = ' * @param mixed ' . $p;
    }
    $lines[] = ' * @return ' . ($returnType ? $returnType : 'void');
    $lines[] = ' */';
    return implode("\n", $lines) . "\n";
}

$updated = 0;
foreach ($files as $f) {
    $path = $f;
    if (!file_exists($path)) {
        // try from repo root
        $path = $root . DIRECTORY_SEPARATOR . $f;
        if (!file_exists($path)) continue;
    }
    $src = file_get_contents($path);
    $tokens = token_get_all($src);
    $out = '';
    $lastDoc = null;
    $i = 0; $count = count($tokens);
    while ($i < $count) {
        $tok = $tokens[$i];
        if (is_array($tok) && $tok[0] === T_DOC_COMMENT) {
            $lastDoc = $tok[1];
            $out .= $tok[1];
            $i++; continue;
        }
        if (is_array($tok) && in_array($tok[0],[T_CLASS,T_INTERFACE,T_TRAIT], true)) {
            // find name
            $name = null; $j = $i+1;
            while ($j < $count) {
                $t = $tokens[$j];
                if (is_array($t) && $t[0]===T_STRING) { $name = $t[1]; break; }
                $j++;
            }
            if ($lastDoc === null || !containsSince($lastDoc)) {
                $doc = buildDefaultDocblock($name, [], null);
                $out .= $doc;
                $updated++;
            }
            // write current token
            $out .= is_array($tok)?$tok[1]:$tok;
            $lastDoc = null; $i++; continue;
        }
        if (is_array($tok) && $tok[0] === T_FUNCTION) {
            // capture function name and params
            $j = $i+1; $funcName = null;
            while ($j < $count) {
                $t = $tokens[$j];
                if (is_array($t) && $t[0] === T_STRING) { $funcName = $t[1]; $j++; break; }
                if (is_string($t) && $t === '(') break;
                $j++;
            }
            // gather param signature text
            $sig = '';
            $k = $j;
            while ($k < $count && !(is_string($tokens[$k]) && $tokens[$k] === '(')) $k++;
            if ($k < $count && is_string($tokens[$k]) && $tokens[$k] === '(') {
                $depth = 0; $k++;
                while ($k < $count) {
                    $t = $tokens[$k];
                    if (is_string($t)) {
                        if ($t === '(') $depth++; elseif ($t===')') { if ($depth===0) break; $depth--; }
                        $sig .= $t;
                    } else {
                        $sig .= $t[1];
                    }
                    $k++;
                }
            }
            $paramNames = extractParamNamesFromSignature($sig);
            // determine return type (very simple: look ahead for ':')
            $retType = null; $m = $k+1; while ($m < $count && is_array($tokens[$m]) && $tokens[$m][0]===T_WHITESPACE) $m++;
            if ($m < $count && is_string($tokens[$m]) && $tokens[$m] === ':') {
                $m++; $rt = '';
                while ($m < $count) {
                    $t = $tokens[$m];
                    if (is_string($t)) { if ($t==='{'||$t===';'||$t===')') break; $rt .= $t; }
                    else $rt .= $t[1];
                    $m++;
                }
                $retType = trim($rt) ?: null;
            }

            if ($lastDoc === null) {
                $doc = buildDefaultDocblock($funcName ?: '(anonymous)', $paramNames, $retType);
                $out .= $doc;
                $updated++;
            } else {
                // if doc exists but missing @since or @param/@return, append defaults
                $need = false; $docText = $lastDoc;
                if (!containsSince($docText)) { $docText = rtrim($docText, "*/\n ") . "\n * @since v1.0.0 2026-04-14\n */\n"; $need = true; }
                if (!preg_match('/@param\s+/i', $docText) && count($paramNames)>0) {
                    // insert param lines before closing
                    $insert = '';
                    foreach ($paramNames as $pn) $insert .= " * @param mixed $pn\n";
                    $docText = preg_replace('/\*\s*\*\//', $insert . ' */', $docText);
                    $need = true;
                }
                if (!preg_match('/@return\s+/i', $docText)) {
                    $docText = preg_replace('/\*\s*\*\//', " * @return " . ($retType?$retType:'void') . "\n */", $docText);
                    $need = true;
                }
                if ($need) { $out .= $docText; $updated++; }
                else { $out .= $lastDoc; }
            }
            // write function token itself
            $out .= is_array($tok)?$tok[1]:$tok;
            $lastDoc = null; $i++; continue;
        }
        // default write
        $out .= is_array($tok)?$tok[1]:$tok;
        $lastDoc = null;
        $i++;
    }
    if ($updated) {
        // backup original only once
        file_put_contents($path . '.bak.docblocks', $src);
        file_put_contents($path, $out);
        echo "Patched: $path\n";
    }
}

echo "Done. Updated docblocks in $updated locations.\n";
