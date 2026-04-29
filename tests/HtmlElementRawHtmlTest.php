<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * Tests for HtmlElement::html(string $rawHtml)
 *
 * html(string $rawHtml) appends raw (unescaped) HTML as inner content.
 * The raw content is rendered without HTML-escaping, so it is the caller's
 * responsibility to pass pre-sanitised markup.
 */
class HtmlElementRawHtmlTest extends TestCase
{
    private HtmlElement $el;

    protected function setUp(): void
    {
        $this->el = new HtmlElement('div');
    }

    public function testHtmlMethodRendersRawContent(): void
    {
        $this->el->html('<b>bold</b>');
        $this->assertStringContainsString('<b>bold</b>', $this->el->getHtml());
    }

    public function testHtmlMethodIsNotEscaped(): void
    {
        $this->el->html('<span class="x">text</span>');
        // Should appear verbatim, not as &lt;span ...
        $this->assertStringNotContainsString('&lt;span', $this->el->getHtml());
        $this->assertStringContainsString('<span class="x">text</span>', $this->el->getHtml());
    }

    public function testHtmlMethodIsFluentInterface(): void
    {
        $result = $this->el->html('<em>x</em>');
        $this->assertSame($this->el, $result);
    }

    public function testHtmlMethodAppearsInsideTag(): void
    {
        $this->el->html('<p>inner</p>');
        $html = $this->el->getHtml();
        $this->assertMatchesRegularExpression('/<div[^>]*><p>inner<\/p><\/div>/', $html);
    }

    public function testHtmlMethodCoexistsWithTextContent(): void
    {
        $this->el->setTextContent('text ');
        $this->el->html('<em>em</em>');
        $html = $this->el->getHtml();
        $this->assertStringContainsString('text', $html);
        $this->assertStringContainsString('<em>em</em>', $html);
    }

    public function testHtmlMethodCoexistsWithNestedChildren(): void
    {
        $child = new HtmlElement('b', 'bold');
        $this->el->addNested($child);
        $this->el->html('<i>italic</i>');
        $html = $this->el->getHtml();
        $this->assertStringContainsString('<b>bold</b>', $html);
        $this->assertStringContainsString('<i>italic</i>', $html);
    }

    public function testHtmlMethodCanBeCalledMultipleTimes(): void
    {
        $this->el->html('<a>1</a>')->html('<a>2</a>');
        $html = $this->el->getHtml();
        $this->assertStringContainsString('<a>1</a>', $html);
        $this->assertStringContainsString('<a>2</a>', $html);
    }
}
