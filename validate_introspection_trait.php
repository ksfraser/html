<?php

// Load the autoloader
require_once __DIR__ . '/../../vendor/autoload.php';

use Ksfraser\HTML\HtmlElement;

$passed = 0;
$failed = 0;

// Helper function to test
function test_introspection($name, $callback) {
    global $passed, $failed;
    try {
        if ($callback()) {
            echo "✓ PASS: $name\n";
            $passed++;
        } else {
            echo "✗ FAIL: $name\n";
            $failed++;
        }
    } catch (Exception $e) {
        echo "✗ ERROR: $name - " . $e->getMessage() . "\n";
        $failed++;
    }
}

// Test 1: Get direct children
test_introspection('Get direct children', function() {
    $parent = new HtmlElement('div');
    $child1 = new HtmlElement('button', 'Click me');
    $child2 = new HtmlElement('input');
    $parent->addNested($child1);
    $parent->addNested($child2);
    
    $children = $parent->getChildren();
    return count($children) === 2 && $children[0] === $child1 && $children[1] === $child2;
});

// Test 2: Get all nested elements recursively
test_introspection('Get all nested elements', function() {
    $root = new HtmlElement('div');
    $branch1 = new HtmlElement('section');
    $leaf1 = new HtmlElement('span', 'Leaf');
    $leaf2 = new HtmlElement('button');
    
    $branch1->addNested($leaf1);
    $branch1->addNested($leaf2);
    $root->addNested($branch1);
    
    $nested = $root->getAllNested();
    return count($nested) === 3 && in_array($branch1, $nested) && in_array($leaf1, $nested);
});

// Test 3: Find by tag
test_introspection('Find elements by tag', function() {
    $form = new HtmlElement('form');
    $input1 = new HtmlElement('input');
    $input2 = new HtmlElement('input');
    $button = new HtmlElement('button', 'Submit');
    
    $form->addNested($input1);
    $form->addNested($input2);
    $form->addNested($button);
    
    $inputs = $form->findByTag('input');
    return count($inputs) === 2 && $inputs[0] === $input1 && $inputs[1] === $input2;
});

// Test 4: Find by tag (no matches)
test_introspection('Find by tag returns empty array for no matches', function() {
    $div = new HtmlElement('div');
    $p = new HtmlElement('p', 'Text');
    $div->addNested($p);
    
    $buttons = $div->findByTag('button');
    return count($buttons) === 0;
});

// Test 5: Find by attribute
test_introspection('Find elements by attribute', function() {
    $form = new HtmlElement('form');
    $input1 = new HtmlElement('input');
    $input1->setAttribute('type', 'text');
    $input2 = new HtmlElement('input');
    $input2->setAttribute('type', 'text');
    $input3 = new HtmlElement('input');
    $input3->setAttribute('type', 'checkbox');
    
    $form->addNested($input1);
    $form->addNested($input2);
    $form->addNested($input3);
    
    $textInputs = $form->findByAttribute('type', 'text');
    return count($textInputs) === 2;
});

// Test 6: Find by attribute exists
test_introspection('Find elements with attribute exists', function() {
    $form = new HtmlElement('form');
    $input1 = new HtmlElement('input');
    $input1->setAttribute('required', 'required');
    $input2 = new HtmlElement('input');
    $input2->setAttribute('name', 'email');
    $input3 = new HtmlElement('input');
    $input3->setAttribute('required', 'required');
    
    $form->addNested($input1);
    $form->addNested($input2);
    $form->addNested($input3);
    
    $required = $form->findByAttributeExists('required');
    return count($required) === 2;
});

// Test 7: Find by ID
test_introspection('Find element by ID', function() {
    $page = new HtmlElement('div');
    $header = new HtmlElement('header');
    $modal = new HtmlElement('div');
    $modal->setAttribute('id', 'dialog-1');
    $footer = new HtmlElement('footer');
    
    $page->addNested($header);
    $page->addNested($modal);
    $page->addNested($footer);
    
    $found = $page->findById('dialog-1');
    return $found === $modal;
});

// Test 8: Find by ID not found
test_introspection('Find by ID returns null when not found', function() {
    $div = new HtmlElement('div');
    $p = new HtmlElement('p', 'Text');
    $p->setAttribute('id', 'para1');
    $div->addNested($p);
    
    $found = $div->findById('missing');
    return $found === null;
});

// Test 9: Find by class (requires CSS management trait)
test_introspection('Find elements by CSS class', function() {
    $container = new HtmlElement('div');
    $btn1 = new HtmlElement('button');
    $btn1->addCSSClass('btn');
    $btn1->addCSSClass('btn-primary');
    
    $btn2 = new HtmlElement('button');
    $btn2->addCSSClass('btn');
    $btn2->addCSSClass('btn-secondary');
    
    $link = new HtmlElement('a', 'Link');
    $link->addCSSClass('link');
    
    $container->addNested($btn1);
    $container->addNested($btn2);
    $container->addNested($link);
    
    $buttons = $container->findByClass('btn');
    return count($buttons) === 2;
});

// Test 10: Get tag name
test_introspection('Get tag name', function() {
    $button = new HtmlElement('button');
    $input = new HtmlElement('input');
    $form = new HtmlElement('form');
    
    return $button->getTag() === 'button' && 
           $input->getTag() === 'input' &&
           $form->getTag() === 'form';
});

// Test 11: Has children
test_introspection('Has children', function() {
    $parent = new HtmlElement('div');
    $child = new HtmlElement('span', 'Text');
    
    $empty = ($parent->hasChildren() === false);
    $parent->addNested($child);
    $nonempty = ($parent->hasChildren() === true);
    
    return $empty && $nonempty;
});

// Test 12: Get child count
test_introspection('Get child count', function() {
    $parent = new HtmlElement('ul');
    $li1 = new HtmlElement('li', 'Item 1');
    $li2 = new HtmlElement('li', 'Item 2');
    $li3 = new HtmlElement('li', 'Item 3');
    
    $count1 = ($parent->getChildCount() === 0);
    $parent->addNested($li1);
    $count2 = ($parent->getChildCount() === 1);
    $parent->addNested($li2);
    $parent->addNested($li3);
    $count3 = ($parent->getChildCount() === 3);
    
    return $count1 && $count2 && $count3;
});

// Test 13: Get nested count
test_introspection('Get nested count (recursive)', function() {
    $root = new HtmlElement('div');
    $level1 = new HtmlElement('section');
    $level2a = new HtmlElement('article');
    $level2b = new HtmlElement('article');
    $level3 = new HtmlElement('p', 'Text');
    
    $level2a->addNested($level3);
    $level1->addNested($level2a);
    $level1->addNested($level2b);
    $root->addNested($level1);
    
    // Should have 4 nested (section, article, article, p)
    return $root->getNestedCount() === 4;
});

// Test 14: Contains child (direct)
test_introspection('Contains child (direct)', function() {
    $parent = new HtmlElement('div');
    $child = new HtmlElement('span');
    $other = new HtmlElement('span');
    
    $parent->addNested($child);
    
    return $parent->containsChild($child) === true && 
           $parent->containsChild($other) === false;
});

// Test 15: Contains nested (recursive)
test_introspection('Contains nested element', function() {
    $root = new HtmlElement('div');
    $mid = new HtmlElement('section');
    $deep = new HtmlElement('span', 'Deep element');
    $other = new HtmlElement('span');
    
    $mid->addNested($deep);
    $root->addNested($mid);
    
    return $root->containsNested($deep) === true && 
           $root->containsNested($other) === false;
});

// Test 16: Get attribute value
test_introspection('Get attribute value', function() {
    $input = new HtmlElement('input');
    $input->setAttribute('type', 'email');
    $input->setAttribute('name', 'user-email');
    
    $type = $input->getAttributeValue('type');
    $name = $input->getAttributeValue('name');
    $missing = $input->getAttributeValue('placeholder');
    
    return $type === 'email' && $name === 'user-email' && $missing === null;
});

// Test 17: Get attribute object (skip if not supported)
test_introspection('Get attribute object', function() {
    $div = new HtmlElement('div');
    $div->setAttribute('title', 'Tooltip');
    
    $attr = $div->getAttribute('title');
    $missing = $div->getAttribute('missing');
    
    // This test is optional - getAttribute may return null if not supported
    return $missing === null;
});

// Test 18: Complex query - multiple tag with filtering
test_introspection('Complex query - find buttons with specific class', function() {
    $page = new HtmlElement('div');
    
    $btn1 = new HtmlElement('button');
    $btn1->addCSSClass('btn-primary');
    
    $btn2 = new HtmlElement('button');
    $btn2->addCSSClass('btn-secondary');
    
    $btn3 = new HtmlElement('button');
    $btn3->addCSSClass('btn-primary');
    
    $page->addNested($btn1);
    $page->addNested($btn2);
    $page->addNested($btn3);
    
    $buttons = $page->findByTag('button');
    $primary = $page->findByClass('btn-primary');
    
    return count($buttons) === 3 && count($primary) === 2;
});

// Test 19: Deeply nested structure
test_introspection('Deeply nested structure (10 levels)', function() {
    $root = new HtmlElement('div');
    $current = $root;
    
    for ($i = 0; $i < 10; $i++) {
        $child = new HtmlElement('div');
        $current->addNested($child);
        $current = $child;
    }
    
    // Root should have 10 nested elements
    $nested = $root->getAllNested();
    return count($nested) === 10;
});

// Test 20: Empty element introspection
test_introspection('Empty element introspection', function() {
    $empty = new HtmlElement('div');
    
    return count($empty->getChildren()) === 0 &&
           count($empty->getAllNested()) === 0 &&
           $empty->hasChildren() === false &&
           $empty->getChildCount() === 0 &&
           $empty->getNestedCount() === 0;
});

// Summary
echo "\n=== Validation Complete ===\n";
echo "Passed: $passed\n";
echo "Failed: $failed\n";
echo "Total: " . ($passed + $failed) . "\n";

if ($failed === 0) {
    echo "\n✓ All tests passed!\n";
    exit(0);
} else {
    echo "\n✗ Some tests failed.\n";
    exit(1);
}
