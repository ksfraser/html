<?php

// Simple introspection test
require_once('../../vendor/autoload.php');

use Ksfraser\HTML\HtmlElement;

echo "FR-010 ElementIntrospection Trait Validation\n";
echo "============================================\n\n";

$passed = 0;
$failed = 0;

// Test 1: getChildren
$parent = new HtmlElement('div');
$child1 = new HtmlElement('span');
$child2 = new HtmlElement('button');
$parent->addNested($child1);
$parent->addNested($child2);
$children = $parent->getChildren();

if (count($children) === 2) {
    echo "✓ getChildren returns direct children\n";
    $passed++;
} else {
    echo "✗ getChildren failed\n";
    $failed++;
}

// Test 2: getAllNested
$root = new HtmlElement('div');
$nested1 = new HtmlElement('section');
$nested2 = new HtmlElement('span');
$nested1->addNested($nested2);
$root->addNested($nested1);
$allNested = $root->getAllNested();

if (count($allNested) === 2) {
    echo "✓ getAllNested returns all descendants\n";
    $passed++;
} else {
    echo "✗ getAllNested failed\n";
    $failed++;
}

// Test 3: hasChildren
$empty = new HtmlElement('div');
$withChild = new HtmlElement('div');
$withChild->addNested(new HtmlElement('span'));

if (!$empty->hasChildren() && $withChild->hasChildren()) {
    echo "✓ hasChildren works correctly\n";
    $passed++;
} else {
    echo "✗ hasChildren failed\n";
    $failed++;
}

// Test 4: getChildCount
$container = new HtmlElement('ul');
$container->addNested(new HtmlElement('li'));
$container->addNested(new HtmlElement('li'));
$container->addNested(new HtmlElement('li'));

if ($container->getChildCount() === 3) {
    echo "✓ getChildCount returns correct count\n";
    $passed++;
} else {
    echo "✗ getChildCount failed\n";
    $failed++;
}

// Test 5: getNestedCount
$tree = new HtmlElement('div');
$level1 = new HtmlElement('section');
$level2 = new HtmlElement('article');
$level3 = new HtmlElement('p');
$level2->addNested($level3);
$level1->addNested($level2);
$tree->addNested($level1);

if ($tree->getNestedCount() === 3) {
    echo "✓ getNestedCount returns all descendants\n";
    $passed++;
} else {
    echo "✗ getNestedCount failed\n";
    $failed++;
}

// Test 6: containsChild
$p = new HtmlElement('div');
$c = new HtmlElement('span');
$other = new HtmlElement('span');
$p->addNested($c);

if ($p->containsChild($c) && !$p->containsChild($other)) {
    echo "✓ containsChild works correctly\n";
    $passed++;
} else {
    echo "✗ containsChild failed\n";
    $failed++;
}

// Test 7: containsNested
$root = new HtmlElement('div');
$mid = new HtmlElement('section');
$deep = new HtmlElement('span');
$other2 = new HtmlElement('span');
$mid->addNested($deep);
$root->addNested($mid);

if ($root->containsNested($deep) && !$root->containsNested($other2)) {
    echo "✓ containsNested works correctly\n";
    $passed++;
} else {
    echo "✗ containsNested failed\n";
    $failed++;
}

// Test 8: getTag
$div = new HtmlElement('div');
$button = new HtmlElement('button');
$p = new HtmlElement('p');

if ($div->getTag() === 'div' && $button->getTag() === 'button' && $p->getTag() === 'p') {
    echo "✓ getTag returns correct tag names\n";
    $passed++;
} else {
    echo "✗ getTag failed\n";
    $failed++;
}

echo "\n=== Validation Complete ===\n";
echo "Passed: $passed/8\n";
echo "Failed: $failed/8\n";

if ($failed === 0) {
    echo "\n✓ All core introspection tests passed!\n";
} else {
    echo "\n✗ Some tests failed.\n";
}
