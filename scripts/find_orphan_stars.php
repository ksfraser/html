<?php
$dir = __DIR__ . '/../src';
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$problems = [];
foreach ($it as $f) {
    if (!$f->isFile()) continue;
    if (substr($f->getFilename(), -4) !== '.php') continue;
    $path = $f->getPathname();
    $lines = file($path);
    $total = count($lines);
    for ($i=0;$i<$total;$i++) {
        $line = $lines[$i];
        if (preg_match('/^\s*\*.*$/', $line)) {
            // Look backwards for start of docblock
            $j = $i-1; $foundStart = false; $within = false;
            while ($j>=0) {
                $t = rtrim($lines[$j]);
                if (preg_match('/\/\*\*/', $t) || preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (preg_match('/\/\*\*/', $t)) { $foundStart = true; break; }
                if (trim($t) === '') { $j--; continue; }
                // if previous non-empty line is start '/**' then it's fine
                if (strpos(trim($t), '/**') === 0) { $foundStart = true; break; }
                // if previous non-empty line ends with '*/' then it's end of some docblock, so this star is likely not part
                if (strpos($t, '*/') !== false) { break; }
                break;
            }
            if (!$foundStart) {
                $problems[] = [ 'file'=>$path, 'line'=> $i+1, 'text'=> rtrim($line) ];
            }
        }
    }
}
if (count($problems) === 0) { echo "No orphan '*' lines found.\n"; exit(0); }
foreach ($problems as $p) {
    echo "PROBLEM: {$p['file']}:{$p['line']}: {$p['text']}\n";
}
exit(1);
