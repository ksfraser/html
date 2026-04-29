<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * Tests for the *If conditional helper methods added to HtmlElement and its traits.
 */
class HtmlElementConditionalTest extends TestCase
{
    private function el(): HtmlElement
    {
        return new HtmlElement('div');
    }

    // ------------------------------------------------------------------
    // setAttributeIf (on HtmlElement)
    // ------------------------------------------------------------------

    public function testSetAttributeIfTrueAppliesAttribute(): void
    {
        $el = $this->el();
        $el->setAttributeIf(true, 'id', 'my-id');
        $this->assertStringContainsString('id="my-id"', $el->getHtml());
    }

    public function testSetAttributeIfFalseSkipsAttribute(): void
    {
        $el = $this->el();
        $el->setAttributeIf(false, 'id', 'my-id');
        $this->assertStringNotContainsString('id=', $el->getHtml());
    }

    public function testSetAttributeIfReturnsSelf(): void
    {
        $el = $this->el();
        $result = $el->setAttributeIf(true, 'id', 'x');
        $this->assertSame($el, $result);
    }

    // ------------------------------------------------------------------
    // addCSSClassIf (CSSManagementTrait)
    // ------------------------------------------------------------------

    public function testAddCSSClassIfTrueAddsClass(): void
    {
        $el = $this->el();
        $el->addCSSClassIf(true, 'active');
        $this->assertStringContainsString('active', $el->getHtml());
    }

    public function testAddCSSClassIfFalseSkipsClass(): void
    {
        $el = $this->el();
        $el->addCSSClassIf(false, 'active');
        $this->assertStringNotContainsString('active', $el->getHtml());
    }

    public function testAddCSSClassIfReturnsSelf(): void
    {
        $el = $this->el();
        $result = $el->addCSSClassIf(false, 'x');
        $this->assertSame($el, $result);
    }

    public function testAddCSSClassIfDoesNotDuplicate(): void
    {
        $el = $this->el();
        $el->addCSSClass('btn');
        $el->addCSSClassIf(true, 'btn');  // duplicate — should not double-add
        $html = $el->getHtml();
        // 'btn' should appear exactly once in the class value
        $this->assertEquals(1, substr_count($html, 'btn'));
    }

    // ------------------------------------------------------------------
    // setDataIf (DataAttributeTrait)
    // ------------------------------------------------------------------

    public function testSetDataIfTrueSetsData(): void
    {
        $el = $this->el();
        $el->setDataIf(true, 'userId', '42');
        $this->assertStringContainsString('data-userId="42"', $el->getHtml());
    }

    public function testSetDataIfFalseSkipsData(): void
    {
        $el = $this->el();
        $el->setDataIf(false, 'userId', '42');
        $this->assertStringNotContainsString('data-userId', $el->getHtml());
    }

    public function testSetDataIfReturnsSelf(): void
    {
        $el = $this->el();
        $result = $el->setDataIf(false, 'k', 'v');
        $this->assertSame($el, $result);
    }

    // ------------------------------------------------------------------
    // setAriaIf (AriaAttributeTrait)
    // ------------------------------------------------------------------

    public function testSetAriaIfTrueSetsAria(): void
    {
        $el = $this->el();
        $el->setAriaIf(true, 'label', 'Close');
        $this->assertStringContainsString('aria-label="Close"', $el->getHtml());
    }

    public function testSetAriaIfFalseSkipsAria(): void
    {
        $el = $this->el();
        $el->setAriaIf(false, 'label', 'Close');
        $this->assertStringNotContainsString('aria-label', $el->getHtml());
    }

    public function testSetAriaIfReturnsSelf(): void
    {
        $el = $this->el();
        $result = $el->setAriaIf(false, 'label', 'x');
        $this->assertSame($el, $result);
    }

    // ------------------------------------------------------------------
    // setContent (HtmlElement)
    // ------------------------------------------------------------------

    public function testSetContentRendersEscapedText(): void
    {
        $el = $this->el();
        $el->setTextContent('Hello & <World>');
        $html = $el->getHtml();
        $this->assertStringContainsString('Hello &amp; &lt;World&gt;', $html);
    }

    public function testSetContentReturnsSelf(): void
    {
        $el = $this->el();
        $result = $el->setTextContent('text');
        $this->assertSame($el, $result);
    }

    public function testSetContentOverwritesPreviousContent(): void
    {
        $el = $this->el();
        $el->setTextContent('first');
        $el->setTextContent('second');
        $html = $el->getHtml();
        $this->assertStringContainsString('second', $html);
        $this->assertStringNotContainsString('first', $html);
    }
}
