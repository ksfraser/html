<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * Tests for HtmlElement::appendAttribute()
 *
 * appendAttribute(string $key, string $value, string $separator = ' ')
 * Appends a value to an existing attribute, or sets the attribute if absent.
 */
class HtmlElementAppendAttributeTest extends TestCase
{
    private HtmlElement $el;

    protected function setUp(): void
    {
        $this->el = new HtmlElement('div');
    }

    public function testAppendAttributeSetsWhenAbsent(): void
    {
        $this->el->appendAttribute('class', 'foo');
        $this->assertStringContainsString('class="foo"', $this->el->getHtml());
    }

    public function testAppendAttributeAppendsWithDefaultSpaceSeparator(): void
    {
        $this->el->setAttribute('class', 'foo');
        $this->el->appendAttribute('class', 'bar');
        $this->assertStringContainsString('class="foo bar"', $this->el->getHtml());
    }

    public function testAppendAttributeWithCustomSeparator(): void
    {
        $this->el->setAttribute('rel', 'noopener');
        $this->el->appendAttribute('rel', 'noreferrer', ' ');
        $this->assertStringContainsString('rel="noopener noreferrer"', $this->el->getHtml());
    }

    public function testAppendAttributeWithCommaSeparator(): void
    {
        $this->el->setAttribute('accept', 'image/png');
        $this->el->appendAttribute('accept', 'image/jpeg', ',');
        $this->assertStringContainsString('accept="image/png,image/jpeg"', $this->el->getHtml());
    }

    public function testAppendAttributeIsFluentInterface(): void
    {
        $result = $this->el->appendAttribute('class', 'foo');
        $this->assertSame($this->el, $result);
    }

    public function testAppendAttributeMultipleCalls(): void
    {
        $this->el->appendAttribute('class', 'a')
                 ->appendAttribute('class', 'b')
                 ->appendAttribute('class', 'c');
        $this->assertStringContainsString('class="a b c"', $this->el->getHtml());
    }
}
