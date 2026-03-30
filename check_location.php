<?php
require_once('../../vendor/autoload.php');

$el = new \Ksfraser\HTML\HtmlElement('div');

// Get the reflection of the class 
$refl = new ReflectionClass($el);
echo "HtmlElement file location: " . $refl->getFileName() . "\n\n";

$traits = $refl->getTraits();
echo "Traits used:\n";
foreach ($traits as $trait) {
    echo "- " . $trait->getName() . "\n";
}
