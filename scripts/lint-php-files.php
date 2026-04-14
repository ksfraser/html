<?php
// scripts/lint-php-files.php
// Lint all PHP files under a directory and print parse errors.
$path = $argv[1] ?? 'src';
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
$errors = [];
foreach ($it as $f) {
    if (!$f->isFile()) continue;
    $name = $f->getPathname();
    if (str_ends_with($name, '.php')) {
        $out = null;
        $rc = null;
        exec(PHP_BINARY . ' -l ' . escapeshellarg($name) . ' 2>&1', $outLines, $rc);
        $out = implode("\n", $outLines);
        if ($rc !== 0) {
            $errors[$name] = $out;
        }
    }
}
if (empty($errors)) {
    echo "No syntax errors found.\n";
    exit(0);
}
foreach ($errors as $file => $msg) {
    echo "---- ERROR in: $file ----\n";
    echo $msg . "\n\n";
}
exit(1);
