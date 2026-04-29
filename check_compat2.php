<?php
// Run each file in isolation to catch fatal class declaration errors
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('src'));
$errors = [];

foreach ($it as $f) {
    if ($f->getExtension() !== 'php') continue;
    $path = str_replace('\\', '/', $f->getPathname());
    if (strpos($path, 'archived') !== false) continue;
    if (strpos($path, 'Examples') !== false) continue;

    // Run the file in a subprocess to catch fatal declaration errors
    $cmd = 'php -d xdebug.mode=off -r "require \'vendor/autoload.php\'; include \'' . addslashes($path) . '\'; echo 1;" 2>&1';
    $output = shell_exec($cmd);
    if ($output !== null && strpos($output, '1') === false) {
        // Only show errors (output without "1" means something went wrong)
        $errors[$f->getBasename()] = trim($output);
    }
}

if (empty($errors)) {
    echo "ALL_OK\n";
} else {
    foreach ($errors as $name => $err) {
        echo "$name: $err\n";
    }
}
