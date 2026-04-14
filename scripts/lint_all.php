<?php
// scripts/lint_all.php - lint all PHP files under src and tests
$dir = __DIR__ . '/../';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$errors = [];
foreach ($iterator as $f) {
    if (!$f->isFile()) continue;
    if (substr($f->getFilename(), -4) !== '.php') continue;
    $path = $f->getPathname();
    // skip vendor
    if (strpos($path, DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR) !== false) continue;
    $out = null;
    $rc = null;
    $cmd = 'php -l ' . escapeshellarg($path) . ' 2>&1';
    $out = shell_exec($cmd);
    if ($out === null) continue;
    if (strpos($out, 'No syntax errors detected') === false && strpos($out, 'No syntax errors') === false) {
        $errors[] = [ 'file' => $path, 'out' => $out ];
    }
}
if (count($errors) === 0) {
    echo "OK: no syntax errors\n";
    exit(0);
}
foreach ($errors as $e) {
    echo "==FILE: " . $e['file'] . "\n" . $e['out'] . "\n";
}
exit(1);
