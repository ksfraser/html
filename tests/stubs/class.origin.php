<?php

// Test stub for legacy includes.
// Some legacy VIEW_* classes do require_once('class.origin.php') from include_path.

if (!class_exists('Ksfraser\\Origin\\origin')) {
    $autoload = __DIR__ . '/../../vendor/autoload.php';
    if (file_exists($autoload)) {
        require_once $autoload;
    }
}

if (!class_exists('origin', false) && class_exists('Ksfraser\\Origin\\origin')) {
    class origin extends \Ksfraser\Origin\origin
    {
    }
}
