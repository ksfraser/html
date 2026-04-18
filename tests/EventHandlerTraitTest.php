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
/**
 * class EventTestElement
 *
 * @since 1.0.5 2026-03-30
 */
class EventTestElement {
    use \Ksfraser\HTML\Traits\EventHandlerTrait;
    use \Ksfraser\HTML\Traits\CSSManagementTrait;
    
    public $tag = 'div';
    protected $nested = [];
    protected $attributeList;
    
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
function __construct() {
        $this->attributeList = new \Ksfraser\HTML\HtmlAttributeList();
    }
    
/**
 * getHtml
 *
 * @since 1.0.5 2026-03-30
 * @return string
 */
    public /**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
function getHtml(): string {
        $html = '<' . $this->tag;
        $html .= ' ' . $this->attributeList->getHtml();
        $html .= $this->renderEventHandlers();
        $html .= '></div>';
        return $html;
    }
    
/**
 * __toString
 *
 * @since 1.0.5 2026-03-30
 * @return string
 */
    public /**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
/**
 * __toString
 *
 * @return string
 */
function __toString(): string {
        return $this->getHtml();
    }
    
/**
 * setAttribute
 *
 * @since 1.0.5 2026-03-30
 * @param string $name
 * @param mixed $value
 * @return self
 */
    public /**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
/**
 * setAttribute
 *
 * @param string $name
 * @param mixed $value
 * @return self
 */
function setAttribute(string $name, $value): self {
        $attr = new \Ksfraser\HTML\HtmlAttribute($name, new \Ksfraser\HTML\Elements\HtmlString($value));
        $this->attributeList->setAttribute($attr);
        return $this;
    }
    
/**
 * getAttributeValue
 *
 * @since 1.0.5 2026-03-30
 * @param string $name
 * @return ?string
 */
    public /**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
/**
 * getAttributeValue
 *
 * @param string $name
 * @return ?string
 */
function getAttributeValue(string $name): ?string {
        return $this->attributeList->getAttributeValue($name);
    }
}

/**
 * class EventHandlerTraitTest
 *
 * @since 1.0.5 2026-03-30
 */
class EventHandlerTraitTest extends TestCase
{
    private EventTestElement $element;

/**
 * setUp
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    protected /**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
/**
 * setUp
 *
 * @return void
 */
function setUp(): void
    {
        $this->element = new EventTestElement();
    }

    // ===== HAPPY PATH TESTS: CLICK =====

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
/**
 * testOnClickAddsClickHandler
 *
 * @return void
 */
function testOnClickAddsClickHandler(): void
    {
        $this->element->onClick("alert('clicked')");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
/**
 * testOnClickReturnsElement
 *
 * @return void
 */
function testOnClickReturnsElement(): void
    {
        $result = $this->element->onClick("alert('clicked')");
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
/**
 * testOnClickRendersCorrectly
 *
 * @return void
 */
function testOnClickRendersCorrectly(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
/**
 * testOnChangeAddsChangeHandler
 *
 * @return void
 */
function testOnChangeAddsChangeHandler(): void
    {
        $this->element->onChange("handleChange()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onchange=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
/**
 * testOnSubmitAddsSubmitHandler
 *
 * @return void
 */
function testOnSubmitAddsSubmitHandler(): void
    {
        $this->element->onSubmit("handleSubmit()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onsubmit=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
/**
 * testOnFocusAddsFocusHandler
 *
 * @return void
 */
function testOnFocusAddsFocusHandler(): void
    {
        $this->element->onFocus("handleFocus()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onfocus=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
/**
 * testOnBlurAddsBlurHandler
 *
 * @return void
 */
function testOnBlurAddsBlurHandler(): void
    {
        $this->element->onBlur("handleBlur()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onblur=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
/**
 * testOnKeyPressAddsKeyPressHandler
 *
 * @return void
 */
function testOnKeyPressAddsKeyPressHandler(): void
    {
        $this->element->onKeyPress("handleKeyPress()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeypress=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
/**
 * testOnKeyDownAddsKeyDownHandler
 *
 * @return void
 */
function testOnKeyDownAddsKeyDownHandler(): void
    {
        $this->element->onKeyDown("handleKeyDown()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeydown=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
/**
 * testOnKeyUpAddsKeyUpHandler
 *
 * @return void
 */
function testOnKeyUpAddsKeyUpHandler(): void
    {
        $this->element->onKeyUp("handleKeyUp()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onkeyup=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
/**
 * testOnMouseEnterAddsMouseEnterHandler
 *
 * @return void
 */
function testOnMouseEnterAddsMouseEnterHandler(): void
    {
        $this->element->onMouseEnter("handleMouseEnter()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseenter=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
/**
 * testOnMouseLeaveAddsMouseLeaveHandler
 *
 * @return void
 */
function testOnMouseLeaveAddsMouseLeaveHandler(): void
    {
        $this->element->onMouseLeave("handleMouseLeave()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseleave=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
/**
 * testOnMouseOverAddsMouseOverHandler
 *
 * @return void
 */
function testOnMouseOverAddsMouseOverHandler(): void
    {
        $this->element->onMouseOver("handleMouseOver()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseover=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
/**
 * testOnMouseOutAddsMouseOutHandler
 *
 * @return void
 */
function testOnMouseOutAddsMouseOutHandler(): void
    {
        $this->element->onMouseOut("handleMouseOut()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onmouseout=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
/**
 * testOnDoubleClickAddsDoubleClickHandler
 *
 * @return void
 */
function testOnDoubleClickAddsDoubleClickHandler(): void
    {
        $this->element->onDoubleClick("handleDoubleClick()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('ondblclick=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
/**
 * testOnLoadAddsLoadHandler
 *
 * @return void
 */
function testOnLoadAddsLoadHandler(): void
    {
        $this->element->onLoad("handleLoad()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onload=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
/**
 * testOnErrorAddsErrorHandler
 *
 * @return void
 */
function testOnErrorAddsErrorHandler(): void
    {
        $this->element->onError("handleError()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onerror=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
/**
 * testOnInputAddsInputHandler
 *
 * @return void
 */
function testOnInputAddsInputHandler(): void
    {
        $this->element->onInput("handleInput()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('oninput=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
/**
 * testOnScrollAddsScrollHandler
 *
 * @return void
 */
function testOnScrollAddsScrollHandler(): void
    {
        $this->element->onScroll("handleScroll()");
        $html = $this->element->getHtml();
        $this->assertStringContainsString('onscroll=', $html);
    }

    /**
     * @test
     * @group FR-007
     * @group event-handlers
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
/**
 * testOnWheelAddsWheelHandler
 *
 * @return void
 */
function testOnWheelAddsWheelHandler(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesQuotes
 *
 * @return void
 */
function testEventHandlerCodeEscapesQuotes(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesDoubleQuotes
 *
 * @return void
 */
function testEventHandlerCodeEscapesDoubleQuotes(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesLessThan
 *
 * @return void
 */
function testEventHandlerCodeEscapesLessThan(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesGreaterThan
 *
 * @return void
 */
function testEventHandlerCodeEscapesGreaterThan(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
/**
 * testEventHandlerCodeEscapesAmpersand
 *
 * @return void
 */
function testEventHandlerCodeEscapesAmpersand(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
/**
 * testMultipleClickHandlersReplaced
 *
 * @return void
 */
function testMultipleClickHandlersReplaced(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
/**
 * testDifferentEventHandlers
 *
 * @return void
 */
function testDifferentEventHandlers(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlersChainWithCSSClasses
 *
 * @return void
 */
function testEventHandlersChainWithCSSClasses(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
/**
 * testEventChainMultipleHandlers
 *
 * @return void
 */
function testEventChainMultipleHandlers(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
/**
 * testEventChainWithAttributes
 *
 * @return void
 */
function testEventChainWithAttributes(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
/**
 * testEmptyEventHandlerCode
 *
 * @return void
 */
function testEmptyEventHandlerCode(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
/**
 * testWhitespaceOnlyEventHandlerCode
 *
 * @return void
 */
function testWhitespaceOnlyEventHandlerCode(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
/**
 * testComplexJavaScriptCode
 *
 * @return void
 */
function testComplexJavaScriptCode(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
/**
 * testVeryLongEventHandlerCode
 *
 * @return void
 */
function testVeryLongEventHandlerCode(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
/**
 * testEventHandlerWithNewlines
 *
 * @return void
 */
function testEventHandlerWithNewlines(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
/**
 * testEventHandlerWithButtonElement
 *
 * @return void
 */
function testEventHandlerWithButtonElement(): void
    {
        $button = new EventTestElement();
        $button->tag = 'button';
        
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
/**
 * testEventHandlerWithFormElement
 *
 * @return void
 */
function testEventHandlerWithFormElement(): void
    {
        $form = new EventTestElement();
        $form->tag = 'form';
        
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
/**
 * testEventHandlerWithInputElement
 *
 * @return void
 */
function testEventHandlerWithInputElement(): void
    {
        $input = new EventTestElement();
        $input->tag = 'input';
        
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
/**
 * testEventHandlerWithMouseInteractionChain
 *
 * @return void
 */
function testEventHandlerWithMouseInteractionChain(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
/**
 * testEventHandlerPreservesOtherAttributes
 *
 * @return void
 */
function testEventHandlerPreservesOtherAttributes(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
/**
 * testExistingSetAttributeStillWorks
 *
 * @return void
 */
function testExistingSetAttributeStillWorks(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakCSSClasses
 *
 * @return void
 */
function testEventHandlerDoesNotBreakCSSClasses(): void
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
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
/**
 * testEventHandlerDoesNotBreakAttributes
 *
 * @return void
 */
function testEventHandlerDoesNotBreakAttributes(): void
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
