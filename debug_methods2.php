<?php
// Direct include to bypass autoloader caching
require_once('src/Ksfraser/HTML/HtmlElement.php');

$el = new \Ksfraser\HTML\HtmlElement('div');
$methods = get_class_methods($el);

echo "Methods on HtmlElement (after direct include):\n";
$introspection_methods = array_filter($methods, /**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $m
 * @return void
 */
/**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $m
 * @return void
 */
function($m) {
    return in_array($m, ['getChildren', 'getAllNested', 'findByTag', 'findById', 'hasChildren', 'getChildCount', 'getNestedCount', 'containsChild', 'containsNested']);
});
echo "Introspection methods: " . implode(", ", $introspection_methods) . "\n";

// Check specific methods
foreach (['getChildren', 'getAllNested', 'findByTag', 'findById', 'hasChildren', 'containsChild'] as $method) {
    if (method_exists($el, $method)) {
        echo "✓ $method() exists\n";
    } else {
        echo "✗ $method() NOT FOUND\n";
    }
}
