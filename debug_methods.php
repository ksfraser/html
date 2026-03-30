<?php
require_once('../../vendor/autoload.php');

$el = new \Ksfraser\HTML\HtmlElement('div');
$methods = get_class_methods($el);

echo "Methods on HtmlElement:\n";
echo implode("\n", $methods);
echo "\n\n";

// Check specific method
if (method_exists($el, 'getChildren')) {
    echo "✓ getChildren() exists\n";
} else {
    echo "✗ getChildren() NOT FOUND\n";
}

if (method_exists($el, 'getAllNested')) {
    echo "✓ getAllNested() exists\n";
} else {
    echo "✗ getAllNested() NOT FOUND\n";
}
