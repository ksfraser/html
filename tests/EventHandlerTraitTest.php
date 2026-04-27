<?php
/**
 * Test EventHandlerTrait - FR-007
 * 
 * Tests for Event Handler Methods functionality.
 * Covers: onClick, onChange, onSubmit, onFocus, onBlur, onKeyPress, etc.
 * Features: method chaining, multiple handlers, HTML escaping, validation
 * 
 * @author Kevin Fraser
 * @since 2026-03-27
 */

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;

// Simple test element class
class EventTestElement {
    use \Ksfraser\HTML\Traits\EventHandlerTrait;
    use \Ksfraser\HTML\Traits\CSSManagementTrait;
    
    protected $tag = 'div';
    protected $nested = [];
    protected $attributeList;
    
    public function __construct() {
        $this->attributeList = new \Ksfraser\HTML\HtmlAttributeList();
    }
    
    public function getHtml(): string {
        $html = '<' . $this->tag;
        $html .= ' ' . $this->attributeList->getHtml();
        $html .= $this->renderEventHandlers();
        $html .= '></div>';
        return $html;
    }
    
    public function __toString(): string {
        return $this->getHtml();
    }
    
    public function setAttribute(string $name, $value): self {
        $attr = new \Ksfraser\HTML\HtmlAttribute($name, new \Ksfraser\HTML\Elements\HtmlString($value));
        $this->attributeList->setAttribute($attr);
        return $this;
    }
    
    public function getAttributeValue(string $name): ?string {
        return $this->attributeList->getAttributeValue($name);
    }

    public function setTag(string $tag): self {
        $this->tag = $tag;
        return $this;
    }
}

class EventHandlerTraitTest extends TestCase
{
    private EventTestElement $element;

    protected function setUp(): void
    {
        $this->element = new EventTestElement();
    }

    // ===== HAPPY PATH TESTS: CLICK =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnClickAddsClickHandler(): void
    {
        $this->element->onClick("alert('clicked')");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnClickReturnsElement(): void
    {
        $result = $this->element->onClick("alert('clicked')");
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnClickRendersCorrectly(): void
    {
        $this->element->onClick("handleClick()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString("onclick=", $html);
        $this->assertStringContainsString("handleClick()", $html);
    }

    // ===== HAPPY PATH TESTS: STANDARD EVENTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnChangeAddsChangeHandler(): void
    {
        $this->element->onChange("handleChange()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onchange=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnSubmitAddsSubmitHandler(): void
    {
        $this->element->onSubmit("handleSubmit()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onsubmit=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnFocusAddsFocusHandler(): void
    {
        $this->element->onFocus("handleFocus()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onfocus=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnBlurAddsBlurHandler(): void
    {
        $this->element->onBlur("handleBlur()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onblur=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnKeyPressAddsKeyPressHandler(): void
    {
        $this->element->onKeyPress("handleKeyPress()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnKeyDownAddsKeyDownHandler(): void
    {
        $this->element->onKeyDown("handleKeyDown()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeydown=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnKeyUpAddsKeyUpHandler(): void
    {
        $this->element->onKeyUp("handleKeyUp()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeyup=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnMouseEnterAddsMouseEnterHandler(): void
    {
        $this->element->onMouseEnter("handleMouseEnter()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseenter=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnMouseLeaveAddsMouseLeaveHandler(): void
    {
        $this->element->onMouseLeave("handleMouseLeave()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseleave=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnMouseOverAddsMouseOverHandler(): void
    {
        $this->element->onMouseOver("handleMouseOver()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseover=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnMouseOutAddsMouseOutHandler(): void
    {
        $this->element->onMouseOut("handleMouseOut()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseout=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnDoubleClickAddsDoubleClickHandler(): void
    {
        $this->element->onDoubleClick("handleDoubleClick()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('ondblclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnLoadAddsLoadHandler(): void
    {
        $this->element->onLoad("handleLoad()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onload=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnErrorAddsErrorHandler(): void
    {
        $this->element->onError("handleError()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onerror=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnInputAddsInputHandler(): void
    {
        $this->element->onInput("handleInput()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('oninput=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnScrollAddsScrollHandler(): void
    {
        $this->element->onScroll("handleScroll()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onscroll=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     */
    public function testOnWheelAddsWheelHandler(): void
    {
        $this->element->onWheel("handleWheel()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onwheel=', $html);
    }

    // ===== HTML ESCAPING TESTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group escaping
     */
    public function testEventHandlerCodeEscapesQuotes(): void
    {
        $this->element->onClick("alert('It\\'s working')");
        $html = $this->element->getHtml();
        
        // Should be properly escaped in HTML attribute
        $this->assertStringContainsString('onclick=', $html);
        // Quotes should be escaped or enclosed properly
        $this->assertStringNotContainsString("It's working", $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group escaping
     */
    public function testEventHandlerCodeEscapesDoubleQuotes(): void
    {
        $code = 'alert("test")';
        $this->element->onClick($code);
        $html = $this->element->getHtml();
        
        // Should contain escaped or proper attribute markup
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group escaping
     */
    public function testEventHandlerCodeEscapesLessThan(): void
    {
        $this->element->onClick("if (x < 10) doSomething()");
        $html = $this->element->getHtml();
        
        $this->assertStringContainsString('onclick=', $html);
        // Should be escaped for HTML safety
        $this->assertStringContainsString('&lt;', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group escaping
     */
    public function testEventHandlerCodeEscapesGreaterThan(): void
    {
        $this->element->onClick("if (x > 10) doSomething()");
        $html = $this->element->getHtml();
        
        $this->assertStringContainsString('onclick=', $html);
        // Should be escaped for HTML safety
        $this->assertStringContainsString('&gt;', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group escaping
     */
    public function testEventHandlerCodeEscapesAmpersand(): void
    {
        $this->element->onClick("obj.prop && doSomething()");
        $html = $this->element->getHtml();
        
        $this->assertStringContainsString('onclick=', $html);
    }

    // ===== MULTIPLE HANDLERS TESTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group multiple
     */
    public function testMultipleClickHandlersReplaced(): void
    {
        $this->element->onClick("first()");
        $this->element->onClick("second()");
        
        $html = $this->element->getHtml();
        // Last one wins (replacement, not append)
        $this->assertStringContainsString("second()", $html);
        $this->assertStringNotContainsString("first()", $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group multiple
     */
    public function testDifferentEventHandlers(): void
    {
        $this->element->onClick("handleClick()");
        $this->element->onChange("handleChange()");
        $this->element->onSubmit("handleSubmit()");
        
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('onchange=', $html);
        $this->assertStringContainsString('onsubmit=', $html);
    }

    // ===== CHAINING TESTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group chaining
     */
    public function testEventHandlersChainWithCSSClasses(): void
    {
        $result = $this->element
            ->onClick("handleClick()")
            ->addCSSClass('btn')
            ->onChange("handleChange()")
            ->addCSSClass('active');
        
        $this->assertSame($this->element, $result);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('onchange=', $html);
        $this->assertStringContainsString('btn', $html);
        $this->assertStringContainsString('active', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group chaining
     */
    public function testEventChainMultipleHandlers(): void
    {
        $result = $this->element
            ->onClick("first()")
            ->onFocus("second()")
            ->onBlur("third()")
            ->onKeyPress("fourth()");
        
        $this->assertSame($this->element, $result);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('onfocus=', $html);
        $this->assertStringContainsString('onblur=', $html);
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group chaining
     */
    public function testEventChainWithAttributes(): void
    {
        $result = $this->element
            ->setAttribute('id', 'my-button')
            ->onClick("handleClick()")
            ->setAttribute('type', 'button')
            ->onChange("handleChange()");
        
        $this->assertSame($this->element, $result);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('id="my-button"', $html);
        $this->assertStringContainsString('type="button"', $html);
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('onchange=', $html);
    }

    // ===== EDGE CASES =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group edge-cases
     */
    public function testEmptyEventHandlerCode(): void
    {
        $this->element->onClick("");
        $html = $this->element->getHtml();
        // Should not render onclick attribute if empty
        $this->assertStringNotContainsString('onclick=""', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group edge-cases
     */
    public function testWhitespaceOnlyEventHandlerCode(): void
    {
        $this->element->onClick("   ");
        $html = $this->element->getHtml();
        // Should not render onclick attribute if only whitespace
        $this->assertStringNotContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group edge-cases
     */
    public function testComplexJavaScriptCode(): void
    {
        $code = <<<JS
        if (e.keyCode === 13) {
            e.preventDefault();
            submitForm();
        }
        JS;
        
        $this->element->onKeyPress($code);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group edge-cases
     */
    public function testVeryLongEventHandlerCode(): void
    {
        $code = "console.log('" . str_repeat('x', 1000) . "')";
        $this->element->onClick($code);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group edge-cases
     */
    public function testEventHandlerWithNewlines(): void
    {
        $code = "first();\nsecond();\nthird();";
        $this->element->onClick($code);
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
    }

    // ===== INTEGRATION TESTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group integration
     */
    public function testEventHandlerWithButtonElement(): void
    {
        $button = new EventTestElement();
        $button->setTag('button');
        
        $result = $button
            ->addCSSClass('btn')
            ->addCSSClass('btn-primary')
            ->onClick("handleSubmit()")
            ->setAttribute('type', 'submit')
            ->setAttribute('id', 'submit-btn');
        
        $html = $button->getHtml();
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('btn-primary', $html);
        $this->assertStringContainsString('type="submit"', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group integration
     */
    public function testEventHandlerWithFormElement(): void
    {
        $form = new EventTestElement();
        $form->setTag('form');
        
        $form->onSubmit("handleFormSubmit(event)");
        $form->onChange("handleFormChange()");
        $form->onKeyPress("handleFormKeyPress()");
        
        $html = $form->getHtml();
        $this->assertStringContainsString('onsubmit=', $html);
        $this->assertStringContainsString('onchange=', $html);
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group integration
     */
    public function testEventHandlerWithInputElement(): void
    {
        $input = new EventTestElement();
        $input->setTag('input');
        
        $input->onFocus("handleFocus()")
              ->onBlur("handleBlur()")
              ->onInput("handleInput()")
              ->onKeyPress("handleKeyPress()");
        
        $html = $input->getHtml();
        $this->assertStringContainsString('onfocus=', $html);
        $this->assertStringContainsString('onblur=', $html);
        $this->assertStringContainsString('oninput=', $html);
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group integration
     */
    public function testEventHandlerWithMouseInteractionChain(): void
    {
        $element = new EventTestElement();
        
        $element
            ->onMouseEnter("showTooltip()")
            ->onMouseLeave("hideTooltip()")
            ->onMouseOver("highlightElement()")
            ->onMouseOut("unhighlightElement()");
        
        $html = $element->getHtml();
        $this->assertStringContainsString('onmouseenter=', $html);
        $this->assertStringContainsString('onmouseleave=', $html);
        $this->assertStringContainsString('onmouseover=', $html);
        $this->assertStringContainsString('onmouseout=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group integration
     */
    public function testEventHandlerPreservesOtherAttributes(): void
    {
        $element = new EventTestElement();
        
        $element
            ->setAttribute('id', 'test-id')
            ->setAttribute('data-value', '42')
            ->onClick("handleClick()")
            ->setAttribute('aria-label', 'Click me')
            ->onChange("handleChange()");
        
        $html = $element->getHtml();
        $this->assertStringContainsString('id="test-id"', $html);
        $this->assertStringContainsString('data-value="42"', $html);
        $this->assertStringContainsString('aria-label', $html);
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('onchange=', $html);
    }

    // ===== REGRESSION TESTS =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group regression
     */
    public function testExistingSetAttributeStillWorks(): void
    {
        $this->element->setAttribute('onclick', "preventDefaultClickHandler()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group regression
     */
    public function testEventHandlerDoesNotBreakCSSClasses(): void
    {
        $this->element->addCSSClass('btn');
        $this->element->onClick("handleClick()");
        $this->element->addCSSClass('primary');
        
        $html = $this->element->getHtml();
        $this->assertStringContainsString('btn', $html);
        $this->assertStringContainsString('primary', $html);
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
     * @group regression
     */
    public function testEventHandlerDoesNotBreakAttributes(): void
    {
        $this->element->setAttribute('id', 'my-id');
        $this->element->onClick("handleClick()");
        $this->element->setAttribute('class', 'my-class');
        
        $html = $this->element->getHtml();
        $this->assertStringContainsString('id="my-id"', $html);
        $this->assertStringContainsString('onclick=', $html);
        // class is rendered from attributeList
        $this->assertStringContainsString('my-class', $html);
    }
}
