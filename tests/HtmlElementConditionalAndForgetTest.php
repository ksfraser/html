<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * Tests for HtmlElement::addNestedIf() and forgetAttribute()
 *
 * addNestedIf(bool $condition, HtmlElementInterface $el)
 *   — conditionally adds a nested child element
 *
 * forgetAttribute(string $key)
 *   — alias for removeAttribute()
 */
class HtmlElementConditionalAndForgetTest extends TestCase
{
    private HtmlElement $el;

    protected function setUp(): void
    {
        $this->el = new HtmlElement('div');
    }

    // -----------------------------------------------------------------------
    // addNestedIf
    // -----------------------------------------------------------------------

    public function testAddNestedIfTrueAddsChild(): void
    {
        $child = new HtmlElement('span', 'hello');
        $this->el->addNestedIf(true, $child);
        $this->assertStringContainsString('<span', $this->el->getHtml());
    }

    public function testAddNestedIfFalseDoesNotAddChild(): void
    {
        $child = new HtmlElement('span', 'hello');
        $this->el->addNestedIf(false, $child);
        $this->assertStringNotContainsString('<span', $this->el->getHtml());
    }

    public function testAddNestedIfIsFluentInterface(): void
    {
        $child = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $result = $this->el->addNestedIf(false, $child);
        $this->assertSame($this->el, $result);
    }

    public function testAddNestedIfTrueIsFluentInterface(): void
    {
        $child = $this->getMockBuilder(HtmlElementInterface::class)
            ->getMock();
        $child->method('getHtml')->willReturn('<b></b>');
        $result = $this->el->addNestedIf(true, $child);
        $this->assertSame($this->el, $result);
    }

    public function testAddNestedIfOnlyAddsWhenTrue(): void
    {
        $childA = new HtmlElement('b', 'yes');
        $childB = new HtmlElement('i', 'no');
        $this->el->addNestedIf(true, $childA)
                 ->addNestedIf(false, $childB);
        $html = $this->el->getHtml();
        $this->assertStringContainsString('<b>', $html);
        $this->assertStringNotContainsString('<i>', $html);
    }

    // -----------------------------------------------------------------------
    // forgetAttribute
    // -----------------------------------------------------------------------

    public function testForgetAttributeRemovesExistingAttribute(): void
    {
        $this->el->setAttribute('data-x', 'value');
        $this->assertStringContainsString('data-x=', $this->el->getHtml());
        $this->el->forgetAttribute('data-x');
        $this->assertStringNotContainsString('data-x=', $this->el->getHtml());
    }

    public function testForgetAttributeOnAbsentKeyIsNoop(): void
    {
        // Should not throw
        $this->el->forgetAttribute('nonexistent');
        $this->assertStringNotContainsString('nonexistent', $this->el->getHtml());
    }

    public function testForgetAttributeIsFluentInterface(): void
    {
        $result = $this->el->forgetAttribute('x');
        $this->assertSame($this->el, $result);
    }

    public function testForgetAttributeRemovesClass(): void
    {
        $this->el->setAttribute('class', 'foo');
        $this->el->forgetAttribute('class');
        $this->assertStringNotContainsString('class=', $this->el->getHtml());
    }
}
