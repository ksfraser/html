<?php
$root = realpath(__DIR__ . '/..');
echo "ROOT=>".$root."\n";
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
$c = 0;
foreach ($it as $f) {
    if (!$f->isFile()) continue;
    $p = $f->getRealPath();
    if (substr($p, -4) !== '.php') continue;
    echo $p."\n";
    $c++;
    if ($c>20) break;
}
echo "COUNT=>".$c."\n";
