<?php
/**
 * Quick validation script for DataAttributeTrait implementation
 * Tests FR-008 features without full PHPUnit setup
 */

// Setup autoloading
require_once 'src/Ksfraser/HTML/HtmlElementInterface.php';
require_once 'src/Ksfraser/HTML/Elements/HtmlString.php';
require_once 'src/Ksfraser/HTML/HtmlAttribute.php';
require_once 'src/Ksfraser/HTML/HtmlAttributeList.php';
require_once 'src/Ksfraser/HTML/Traits/CSSManagementTrait.php';
require_once 'src/Ksfraser/HTML/Traits/EventHandlerTrait.php';
require_once 'src/Ksfraser/HTML/Traits/DataAttributeTrait.php';
require_once 'src/Ksfraser/HTML/HtmlElement.php';

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

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

echo "=== Data Attribute Trait Validation ===\n\n";

// Test 1: Set and get single data attribute
echo "Test 1: Set and get single data attribute\n";
$div = new TestDiv();
$div->setData('userId', '123');
$pass = $div->getData('userId') === '123';
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 2: Has data attribute
echo "Test 2: Has data attribute\n";
$div = new TestDiv();
$div->setData('userId', '123');
$pass = $div->hasData('userId') && !$div->hasData('missing');
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 3: Data attribute rendered in HTML
echo "Test 3: Data attribute rendered in HTML\n";
$div = new TestDiv();
$div->setData('userId', '123');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'data-userId="123"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 4: Set multiple data attributes
echo "Test 4: Set multiple data attributes\n";
$div = new TestDiv();
$div->setData('userId', '123')
    ->setData('userName', 'John')
    ->setData('role', 'admin');
$html = (string)$div;
echo "HTML: " . substr($html, 0, 80) . "...\n";
$pass = strpos($html, 'data-userId') !== false && 
        strpos($html, 'data-userName') !== false &&
        strpos($html, 'data-role') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 5: Set data attributes with batch
echo "Test 5: Set data attributes with batch\n";
$div = new TestDiv();
$div->setDataAttributes([
    'userId' => '123',
    'userName' => 'John',
    'email' => 'john@example.com'
]);
$html = (string)$div;
$pass = strpos($html, 'data-userId') !== false && 
        strpos($html, 'data-userName') !== false &&
        strpos($html, 'data-email') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 6: Get all data attributes
echo "Test 6: Get all data attributes\n";
$div = new TestDiv();
$div->setData('a', '1');
$div->setData('b', '2');
$div->setData('c', '3');
$all = $div->getAllData();
$pass = count($all) === 3 && $all['a'] === '1' && $all['b'] === '2' && $all['c'] === '3';
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 7: Remove data attribute
echo "Test 7: Remove data attribute\n";
$div = new TestDiv();
$div->setData('userId', '123');
$div->removeData('userId');
$pass = !$div->hasData('userId');
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 8: Clear all data attributes
echo "Test 8: Clear all data attributes\n";
$div = new TestDiv();
$div->setData('a', '1')->setData('b', '2');
$div->clearData();
$pass = count($div->getAllData()) === 0;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 9: HTML escaping in data values
echo "Test 9: HTML escaping in data values\n";
$div = new TestDiv();
$div->setData('message', 'He said "hello"');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, '&quot;') !== false;
echo ($pass ? "✓ PASS - Special chars escaped\n" : "✗ FAIL\n") . "\n";

// Test 10: Data attributes with less-than sign
echo "Test 10: Data attributes with less-than sign\n";
$div = new TestDiv();
$div->setData('condition', '5 < 10');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, '&lt;') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 11: Boolean data attributes
echo "Test 11: Boolean data attributes\n";
$div = new TestDiv();
$div->setData('active', true);
$div->setData('deleted', false);
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'data-active="true"') !== false && 
        strpos($html, 'data-deleted="false"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 12: Integer data attributes
echo "Test 12: Integer data attributes\n";
$div = new TestDiv();
$div->setData('count', 42);
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'data-count="42"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 13: Data attributes with other attributes
echo "Test 13: Data attributes with other attributes\n";
$div = new TestDiv();
$div->setAttribute('id', 'my-div');
$div->setData('type', 'widget');
$div->setAttribute('class', 'container');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'id="my-div"') !== false && 
        strpos($html, 'data-type="widget"') !== false &&
        strpos($html, 'class="container"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 14: Data attributes with CSS classes
echo "Test 14: Data attributes with CSS classes\n";
$div = new TestDiv();
$div->addCSSClass('container');
$div->setData('layout', 'flex');
$div->addCSSClass('main');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'class="container main"') !== false && 
        strpos($html, 'data-layout="flex"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 15: Bootstrap data attributes pattern
echo "Test 15: Bootstrap data attributes pattern\n";
$div = new TestDiv();
$div->setData('bs-toggle', 'modal');
$div->setData('bs-target', '#myModal');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'data-bs-toggle="modal"') !== false && 
        strpos($html, 'data-bs-target="#myModal"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 16: Update existing data attribute
echo "Test 16: Update existing data attribute\n";
$div = new TestDiv();
$div->setData('userId', '123');
$div->setData('userId', '456');
$pass = $div->getData('userId') === '456';
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 17: Method chaining returns self
echo "Test 17: Method chaining returns self\n";
$div = new TestDiv();
$result = $div->setData('key', 'value');
$pass = $result === $div;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 18: Complex method chaining
echo "Test 18: Complex method chaining\n";
$div = new TestDiv();
$div->addCSSClass('btn')
    ->setData('action', 'submit')
    ->setAttribute('id', 'submit-btn')
    ->addCSSClass('btn-primary')
    ->setData('type', 'button');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'class="btn btn-primary"') !== false && 
        strpos($html, 'data-action="submit"') !== false &&
        strpos($html, 'data-type="button"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 19: Array data attribute (JSON encoded)
echo "Test 19: Array data attribute (JSON encoded)\n";
$div = new TestDiv();
$div->setData('items', ['apple', 'banana', 'cherry']);
$html = (string)$div;
echo "HTML: " . substr($html, 0, 100) . "...\n";
$pass = strpos($html, 'data-items=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 20: Unicode data attributes
echo "Test 20: Unicode data attributes\n";
$div = new TestDiv();
$div->setData('message', '你好世界');
$value = $div->getData('message');
$pass = $value === '你好世界';
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

echo "=== Validation Complete - 20/20 Tests ===\n";
