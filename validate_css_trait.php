<?php
/**
 * Quick validation script for CSSManagementTrait implementation
 * Tests FR-006 features without full PHPUnit setup
 */

// Setup autoloading
require_once 'src/Ksfraser/HTML/HtmlElementInterface.php';
require_once 'src/Ksfraser/HTML/Elements/HtmlString.php';
require_once 'src/Ksfraser/HTML/HtmlAttribute.php';
require_once 'src/Ksfraser/HTML/HtmlAttributeList.php';
require_once 'src/Ksfraser/HTML/Traits/CSSManagementTrait.php';
require_once 'src/Ksfraser/HTML/HtmlElement.php';

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

// Create a simple test class extending HtmlElement
/**
 * class TestDiv
 *
 * @since 1.0.5 2026-03-30
 */
class TestDiv extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function __construct() {
        parent::__construct();
        $this->tag = 'div';
    }
}

/**
 * class TestButton
 *
 * @since 1.0.5 2026-03-30
 */
class TestButton extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $content
 * @return void
 */
    public function __construct($content = null) {
        if ($content !== null && !($content instanceof \Ksfraser\HTML\HtmlElementInterface)) {
            $content = new HtmlString($content);
        }
        parent::__construct($content);
        $this->tag = 'button';
    }
}

echo "=== CSS Management Trait Validation ===\n\n";

// Test 1: Add single CSS class
echo "Test 1: Add single CSS class\n";
$div = new TestDiv();
$div->addCSSClass('btn');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'class="btn"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 2: Add multiple classes
echo "Test 2: Add multiple CSS classes\n";
$div = new TestDiv();
$div->addCSSClasses(['btn', 'btn-primary', 'btn-lg']);
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'btn') !== false && strpos($html, 'btn-primary') !== false && strpos($html, 'btn-lg') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 3: Get CSS classes
echo "Test 3: Get CSS classes as array\n";
$div = new TestDiv();
$div->addCSSClasses(['container', 'row', 'active']);
$classes = $div->getCSSClasses();
echo "Classes: " . implode(', ', $classes) . "\n";
$pass = count($classes) === 3 && in_array('container', $classes) && in_array('row', $classes) && in_array('active', $classes);
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 4: Conditional class with true
echo "Test 4: Conditional CSS class (true)\n";
$div = new TestDiv();
$isActive = true;
$div->addCSSClass('active', $isActive);
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'active') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 5: Conditional class with false
echo "Test 5: Conditional CSS class (false)\n";
$div = new TestDiv();
$isDisabled = false;
$div->addCSSClass('disabled', $isDisabled);
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'disabled') === false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 6: Remove CSS class
echo "Test 6: Remove CSS class\n";
$div = new TestDiv();
$div->addCSSClass('btn')->addCSSClass('primary');
$div->removeCSSClass('primary');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'btn') !== false && strpos($html, 'primary') === false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 7: Toggle CSS class
echo "Test 7: Toggle CSS class\n";
$div = new TestDiv();
$div->addCSSClass('active');
$div->toggleCSSClass('active');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'active') === false || strpos($html, 'class=""') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 8: Has CSS class
echo "Test 8: Has CSS class\n";
$div = new TestDiv();
$div->addCSSClass('btn');
$hasBtn = $div->hasCSSClass('btn');
$hasPrimary = $div->hasCSSClass('primary');
echo "Has 'btn': " . ($hasBtn ? 'true' : 'false') . "\n";
echo "Has 'primary': " . ($hasPrimary ? 'true' : 'false') . "\n";
$pass = $hasBtn && !$hasPrimary;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 9: Deduplication
echo "Test 9: Class deduplication\n";
$div = new TestDiv();
$div->addCSSClass('btn')->addCSSClass('btn');
$classes = $div->getCSSClasses();
$btnCount = count(array_filter($classes, fn($c) => $c === 'btn'));
echo "BTN appears: $btnCount times\n";
$pass = $btnCount === 1;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 10: Method chaining
echo "Test 10: Method chaining\n";
$div = new TestDiv();
$result = $div->addCSSClass('container')->addCSSClass('active')->setAttribute('id', 'main');
$pass = $result === $div;
echo ($pass ? "✓ PASS - Chain returned self\n" : "✗ FAIL\n") . "\n";

// Test 11: Invalid class throws exception
echo "Test 11: Invalid CSS class throws exception\n";
$div = new TestDiv();
try {
    $div->addCSSClass('btn primary'); // Space in class name
    echo "✗ FAIL - No exception thrown\n\n";
} catch (\InvalidArgumentException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
    echo "✓ PASS - Exception thrown\n\n";
}

// Test 12: Bootstrap pattern
echo "Test 12: Bootstrap class pattern\n";
$button = new TestButton('Click Me');
$button->addCSSClasses(['btn', 'btn-primary', 'btn-lg']);
$html = (string)$button;
echo "HTML: " . substr($html, 0, 80) . "...\n";
$pass = strpos($html, 'btn') !== false && strpos($html, 'btn-primary') !== false && strpos($html, 'btn-lg') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

echo "=== Validation Complete ===\n";
