<?php
/**
 * Quick validation script for AriaAttributeTrait implementation
 * Tests FR-009 features without full PHPUnit setup
 */

// Setup autoloading
require_once 'src/Ksfraser/HTML/HtmlElementInterface.php';
require_once 'src/Ksfraser/HTML/Elements/HtmlString.php';
require_once 'src/Ksfraser/HTML/HtmlAttribute.php';
require_once 'src/Ksfraser/HTML/HtmlAttributeList.php';
require_once 'src/Ksfraser/HTML/Traits/CSSManagementTrait.php';
require_once 'src/Ksfraser/HTML/Traits/EventHandlerTrait.php';
require_once 'src/Ksfraser/HTML/Traits/DataAttributeTrait.php';
require_once 'src/Ksfraser/HTML/Traits/AriaAttributeTrait.php';
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
         * @return void
         */
        public function __construct() {
                parent::__construct(new HtmlString('Button'));
                $this->tag = 'button';
        }
}

echo "=== ARIA Attribute Trait Validation ===\n\n";

// Test 1: Set and get aria-label
echo "Test 1: Set and get aria-label\n";
$div = new TestDiv();
$div->setAriaLabel('Close dialog');
$pass = $div->getAria('label') === 'Close dialog' && $div->hasAria('label');
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 2: aria-label in HTML
echo "Test 2: aria-label in HTML\n";
$div = new TestDiv();
$div->setAriaLabel('Description');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-label="Description"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 3: Set role attribute
echo "Test 3: Set role attribute\n";
$div = new TestDiv();
$div->setRole('button');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'role="button"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 4: aria-describedby
echo "Test 4: aria-describedby\n";
$div = new TestDiv();
$div->setAriaDescribedBy('help-text-id');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-describedby="help-text-id"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 5: aria-hidden boolean
echo "Test 5: aria-hidden boolean\n";
$div = new TestDiv();
$div->setAriaHidden(true);
$html = (string)$div;
$pass = strpos($html, 'aria-hidden="true"') !== false;
$div2 = new TestDiv();
$div2->setAriaHidden(false);
$html2 = (string)$div2;
$pass = $pass && strpos($html2, 'aria-hidden="false"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 6: aria-disabled
echo "Test 6: aria-disabled\n";
$button = new TestButton();
$button->setAriaDisabled(true);
$html = (string)$button;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-disabled="true"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 7: aria-expanded
echo "Test 7: aria-expanded\n";
$div = new TestDiv();
$div->setAriaExpanded(false);
$html = (string)$div;
$pass = strpos($html, 'aria-expanded="false"') !== false;
$div->setAriaExpanded(true);
$html = (string)$div;
$pass = $pass && strpos($html, 'aria-expanded="true"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 8: aria-checked mixed state
echo "Test 8: aria-checked mixed state\n";
$div = new TestDiv();
$div->setAriaChecked('mixed');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-checked="mixed"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 9: aria-live polite
echo "Test 9: aria-live polite\n";
$div = new TestDiv();
$div->setAriaLive('polite');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-live="polite"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 10: aria numeric values
echo "Test 10: aria numeric values\n";
$div = new TestDiv();
$div->setAriaValuemin(0);
$div->setAriaValuemax(100);
$div->setAriaValuenow(50);
$html = (string)$div;
echo "HTML: " . substr($html, 0, 100) . "...\n";
$pass = strpos($html, 'aria-valuemin="0"') !== false && 
        strpos($html, 'aria-valuemax="100"') !== false &&
        strpos($html, 'aria-valuenow="50"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 11: aria-valuetext
echo "Test 11: aria-valuetext\n";
$div = new TestDiv();
$div->setAriaValuetext('75 percent');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-valuetext="75 percent"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 12: HTML escaping in aria attributes
echo "Test 12: HTML escaping in aria attributes\n";
$div = new TestDiv();
$div->setAriaLabel('He said "hello" & goodbye');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, '&quot;') !== false && strpos($html, '&amp;') !== false;
echo ($pass ? "✓ PASS - Special chars escaped\n" : "✗ FAIL\n") . "\n";

// Test 13: Multiple aria attributes
echo "Test 13: Multiple aria attributes\n";
$div = new TestDiv();
$div->setAriaLabel('Menu')
    ->setRole('navigation')
    ->setAriaExpanded(true)
    ->setAriaLive('polite');
$html = (string)$div;
echo "HTML: " . substr($html, 0, 120) . "...\n";
$pass = strpos($html, 'aria-label="Menu"') !== false && 
        strpos($html, 'role="navigation"') !== false &&
        strpos($html, 'aria-expanded="true"') !== false &&
        strpos($html, 'aria-live="polite"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 14: Remove aria attribute
echo "Test 14: Remove aria attribute\n";
$div = new TestDiv();
$div->setAriaLabel('Label');
$div->removeAria('label');
$pass = !$div->hasAria('label');
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 15: Clear all aria attributes
echo "Test 15: Clear all aria attributes\n";
$div = new TestDiv();
$div->setAriaLabel('Label');
$div->setRole('button');
$all = $div->getAllAria();
$pass = count($all) === 2;
$div->clearAria();
$all = $div->getAllAria();
$pass = $pass && count($all) === 0;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 16: Method chaining
echo "Test 16: Method chaining\n";
$button = new TestButton();
$result = $button->setAriaLabel('Submit');
$pass = $result === $button;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 17: Complex chaining with all traits
echo "Test 17: Complex chaining with all traits\n";
$button = new TestButton();
$button->addCSSClass('btn-primary')
       ->setAriaLabel('Save and Close')
       ->setRole('button')
       ->setData('action', 'save')
       ->onClick("save()")
       ->setAttribute('id', 'save-btn');
$html = (string)$button;
echo "HTML: " . substr($html, 0, 120) . "...\n";
$pass = strpos($html, 'class="btn-primary"') !== false && 
        strpos($html, 'aria-label="Save and Close"') !== false &&
        strpos($html, 'role="button"') !== false &&
        strpos($html, 'data-action="save"') !== false &&
        strpos($html, 'onclick="save()"') !== false &&
        strpos($html, 'id="save-btn"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 18: Generic setAria method
echo "Test 18: Generic setAria method\n";
$div = new TestDiv();
$div->setAria('custom-property', 'custom-value');
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'aria-custom-property="custom-value"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 19: Modal dialog pattern
echo "Test 19: Modal dialog pattern\n";
$modal = new TestDiv();
$modal->setRole('dialog')
      ->setAriaModal(true)
      ->setAriaLabel('Confirmation')
      ->setAriaDescribedBy('modal-description')
      ->setAttribute('id', 'confirm-modal');
$html = (string)$modal;
echo "HTML: " . substr($html, 0, 120) . "...\n";
$pass = strpos($html, 'role="dialog"') !== false && 
        strpos($html, 'aria-modal="true"') !== false &&
        strpos($html, 'aria-label="Confirmation"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 20: Progressbar pattern
echo "Test 20: Progressbar pattern\n";
$progress = new TestDiv();
$progress->setRole('progressbar')
         ->setAriaValuemin(0)
         ->setAriaValuemax(100)
         ->setAriaValuenow(65)
         ->setAriaValuetext('65% complete');
$html = (string)$progress;
echo "HTML: " . substr($html, 0, 100) . "...\n";
$pass = strpos($html, 'role="progressbar"') !== false && 
        strpos($html, 'aria-valuenow="65"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

echo "=== Validation Complete - 20/20 Tests ===\n";
