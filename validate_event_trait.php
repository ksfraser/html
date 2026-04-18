<?php
/**
 * Quick validation script for EventHandlerTrait implementation
 * Tests FR-007 features without full PHPUnit setup
 */

// Setup autoloading
require_once 'src/Ksfraser/HTML/HtmlElementInterface.php';
require_once 'src/Ksfraser/HTML/Elements/HtmlString.php';
require_once 'src/Ksfraser/HTML/HtmlAttribute.php';
require_once 'src/Ksfraser/HTML/HtmlAttributeList.php';
require_once 'src/Ksfraser/HTML/Traits/CSSManagementTrait.php';
require_once 'src/Ksfraser/HTML/Traits/EventHandlerTrait.php';
require_once 'src/Ksfraser/HTML/HtmlElement.php';

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

// Create a simple test element
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

echo "=== Event Handler Trait Validation ===\n\n";

// Test 1: onClick
echo "Test 1: onClick handler\n";
$button = new TestButton('Click me');
$button->onClick("alert('clicked')");
$html = (string)$button;
echo "HTML: $html\n";
$pass = strpos($html, 'onclick=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 2: onChange
echo "Test 2: onChange handler\n";
$div = new TestDiv();
$div->onChange("handleChange()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onchange=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 3: onSubmit
echo "Test 3: onSubmit handler\n";
$div = new TestDiv();
$div->onSubmit("handleSubmit()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onsubmit=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 4: onFocus
echo "Test 4: onFocus handler\n";
$div = new TestDiv();
$div->onFocus("handleFocus()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onfocus=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 5: onBlur
echo "Test 5: onBlur handler\n";
$div = new TestDiv();
$div->onBlur("handleBlur()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onblur=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 6: onKeyPress
echo "Test 6: onKeyPress handler\n";
$div = new TestDiv();
$div->onKeyPress("handleKeyPress()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onkeypress=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 7: Multiple events
echo "Test 7: Multiple event handlers\n";
$button = new TestButton('Submit');
$button->onClick("handleClick()")
       ->onFocus("handleFocus()")
       ->onBlur("handleBlur()");
$html = (string)$button;
echo "HTML: " . substr($html, 0, 100) . "...\n";
$pass = strpos($html, 'onclick=') !== false && strpos($html, 'onfocus=') !== false && strpos($html, 'onblur=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 8: Method chaining
echo "Test 8: Method chaining\n";
$div = new TestDiv();
$result = $div->onClick("first()")
              ->onChange("second()")
              ->onKeyPress("third()")
              ->onSubmit("fourth()");
$pass = $result === $div;
echo ($pass ? "✓ PASS - Chain returned self\n" : "✗ FAIL\n") . "\n";

// Test 9: Event with CSS classes
echo "Test 9: Events with CSS classes\n";
$button = new TestButton('Action');
$button->addCSSClass('btn')
       ->onClick("action()")
       ->addCSSClass('btn-primary')
       ->onChange("change()");
$html = (string)$button;
echo "HTML: $html\n";
$pass = strpos($html, 'btn') !== false && strpos($html, 'onclick=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 10: HTML escaping
echo "Test 10: HTML escaping in event code\n";
$div = new TestDiv();
$div->onClick("if (x < 10) doSomething()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, '&lt;') !== false && strpos($html, 'onclick=') !== false;
echo ($pass ? "✓ PASS - Special chars escaped\n" : "✗ FAIL\n") . "\n";

// Test 11: Empty event handler (should not render)
echo "Test 11: Empty event handler\n";
$div = new TestDiv();
$div->onClick("");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, 'onclick=""') === false;
echo ($pass ? "✓ PASS - Empty handler ignored\n" : "✗ FAIL\n") . "\n";

// Test 12: Replacement behavior (last one wins)
echo "Test 12: Event handler replacement\n";
$div = new TestDiv();
$div->onClick("first()");
$div->onClick("second()");
$html = (string)$div;
echo "HTML: $html\n";
$pass = strpos($html, "second()") !== false && strpos($html, "first()") === false;
echo ($pass ? "✓ PASS - Last handler wins\n" : "✗ FAIL\n") . "\n";

// Test 13: Complex JavaScript
echo "Test 13: Complex JavaScript in event\n";
$code = <<<JS
if (e.keyCode === 13) {
    e.preventDefault();
    submitForm();
}
JS;
$div = new TestDiv();
$div->onKeyPress($code);
$html = (string)$div;
echo "HTML: " . substr($html, 0, 100) . "...\n";
$pass = strpos($html, 'onkeypress=') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

// Test 14: All standard events
echo "Test 14: All standard events\n";
$events = [
    'onClick' => 'onclick',
    'onChange' => 'onchange',
    'onSubmit' => 'onsubmit',
    'onFocus' => 'onfocus',
    'onBlur' => 'onblur',
    'onKeyPress' => 'onkeypress',
    'onKeyDown' => 'onkeydown',
    'onKeyUp' => 'onkeyup',
    'onMouseEnter' => 'onmouseenter',
    'onMouseLeave' => 'onmouseleave',
    'onMouseOver' => 'onmouseover',
    'onMouseOut' => 'onmouseout',
    'onDoubleClick' => 'ondblclick',
    'onLoad' => 'onload',
    'onError' => 'onerror',
    'onInput' => 'oninput',
    'onScroll' => 'onscroll',
    'onWheel' => 'onwheel',
];

$failedEvents = [];
foreach ($events as $method => $attr) {
    $div = new TestDiv();
    $div->$method("handler()");
    $html = (string)$div;
    if (strpos($html, "$attr=") === false) {
        $failedEvents[] = "$method ($attr)";
    }
}

if (empty($failedEvents)) {
    echo "✓ PASS - All 18 event methods work\n\n";
} else {
    echo "✗ FAIL - Failed events: " . implode(', ', $failedEvents) . "\n\n";
}

// Test 15: Bootstrap button pattern
echo "Test 15: Bootstrap button with events\n";
$button = new TestButton('Save');
$button->addCSSClasses(['btn', 'btn-primary'])
       ->onClick("saveData()")
       ->setAttribute('type', 'button')
       ->setAttribute('id', 'save-btn');
$html = (string)$button;
echo "HTML: $html\n";
$pass = strpos($html, 'btn-primary') !== false && strpos($html, 'onclick=') !== false && strpos($html, 'type="button"') !== false;
echo ($pass ? "✓ PASS\n" : "✗ FAIL\n") . "\n";

echo "=== Validation Complete ===\n";
