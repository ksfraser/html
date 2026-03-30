<?php
/**
 * Simple FR-011 FormElementsTrait Test
 * Tests basic functionality without autoloader to avoid hangs
 */

// Manually include necessary files
require_once __DIR__ . '/src/Ksfraser/HTML/HtmlElementInterface.php';
require_once __DIR__ . '/src/Ksfraser/HTML/HtmlAttribute.php';
require_once __DIR__ . '/src/Ksfraser/HTML/HtmlAttributeList.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/CSSManagementTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/EventHandlerTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/DataAttributeTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/AriaAttributeTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/ElementIntrospectionTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/Traits/FormElementsTrait.php';
require_once __DIR__ . '/src/Ksfraser/HTML/HtmlElement.php';

use Ksfraser\HTML\HtmlElement;

echo "====== FR-011 FormElementsTrait Basic Tests ======\n\n";

// Test 1: Form creation
echo "Test 1: Create form with POST method\n";
try {
    $form = HtmlElement::form('POST', '/submit');
    echo "✓ Form created successfully\n";
    echo "  Tag: " . $form->getTag() . "\n";
    echo "  Method: " . $form->getAttributeValue('method') . "\n";
    echo "  Action: " . $form->getAttributeValue('action') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 2: Input creation
echo "\nTest 2: Create email input\n";
try {
    $input = HtmlElement::input('email', 'user_email');
    echo "✓ Input created successfully\n";
    echo "  Tag: " . $input->getTag() . "\n";
    echo "  Type: " . $input->getAttributeValue('type') . "\n";
    echo "  Name: " . $input->getAttributeValue('name') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 3: Input with value
echo "\nTest 3: Set input value\n";
try {
    $input = HtmlElement::input('text', 'username')->setInputValue('john');
    echo "✓ Input value set successfully\n";
    echo "  Value: " . $input->getAttributeValue('value') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 4: Textarea creation
echo "\nTest 4: Create textarea\n";
try {
    $textarea = HtmlElement::textarea('message', 'Enter your message...');
    echo "✓ Textarea created successfully\n";
    echo "  Tag: " . $textarea->getTag() . "\n";
    echo "  Name: " . $textarea->getAttributeValue('name') . "\n";
    echo "  Placeholder: " . $textarea->getAttributeValue('placeholder') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 5: Label creation
echo "\nTest 5: Create label\n";
try {
    $label = HtmlElement::label('Email Address', 'user_email');
    echo "✓ Label created successfully\n";
    echo "  Tag: " . $label->getTag() . "\n";
    echo "  For: " . $label->getAttributeValue('for') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 6: Button creation
echo "\nTest 6: Create button\n";
try {
    $button = HtmlElement::button('Submit', 'submit');
    echo "✓ Button created successfully\n";
    echo "  Tag: " . $button->getTag() . "\n";
    echo "  Type: " . $button->getAttributeValue('type') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 7: Fieldset creation
echo "\nTest 7: Create fieldset\n";
try {
    $fieldset = HtmlElement::fieldset();
    echo "✓ Fieldset created successfully\n";
    echo "  Tag: " . $fieldset->getTag() . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 8: Form group
echo "\nTest 8: Create form group\n";
try {
    $group = HtmlElement::formGroup();
    echo "✓ Form group created successfully\n";
    echo "  Tag: " . $group->getTag() . "\n";
    echo "  Has form-group class: " . ($group->hasCSSClass('form-group') ? 'YES' : 'NO') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 9: Required attribute
echo "\nTest 9: Set required attribute\n";
try {
    $input = HtmlElement::input('text', 'name')->setRequired(true);
    echo "✓ Required attribute set successfully\n";
    echo "  Required: " . $input->getAttributeValue('required') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

// Test 10: Disabled attribute
echo "\nTest 10: Set disabled attribute\n";
try {
    $input = HtmlElement::input('text', 'disabled_field')->setDisabled(true);
    echo "✓ Disabled attribute set successfully\n";
    echo "  Disabled: " . $input->getAttributeValue('disabled') . "\n";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
}

echo "\n====== All basic tests completed ======\n";
