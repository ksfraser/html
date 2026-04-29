<?php
require 'vendor/autoload.php';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('src'));
$errors = [];

foreach ($it as $f) {
    if ($f->getExtension() !== 'php') continue;
    $path = $f->getPathname();
    if (strpos($path, 'archived') !== false) continue;
    if (strpos($path, 'Examples') !== false) continue;

    try {
        include_once $path;
    } catch (Throwable $e) {
        $errors[] = $f->getBasename() . ': ' . $e->getMessage();
    }
}

if (empty($errors)) {
    echo "ALL_OK\n";
} else {
    foreach ($errors as $e) {
        echo $e . "\n";
    }
}
