<?php
require 'vendor/autoload.php';

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('src'));
foreach ($it as $f) {
    if ($f->getExtension() !== 'php') continue;
    $p = str_replace('\\', '/', $f->getPathname());
    if (strpos($p, 'archived') !== false) continue;
    if (strpos($p, 'Examples') !== false) continue;
    if (strpos($p, 'class.VIEW') !== false) continue;  // missing Ksfraser\Origin dep
    if (strpos($p, 'HtmlInternalCSSListList') !== false) continue;  // duplicate class
    if (strpos($p, 'FaUiFunctions') !== false) continue;  // FA external dep
    @include_once $p;
}
echo "DONE\n";
