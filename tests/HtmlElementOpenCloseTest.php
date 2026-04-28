<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * Tests for HtmlElement::openTag() and HtmlElement::closeTag()
 */
class HtmlElementOpenCloseTest extends TestCase
{
    private function makeDiv(?string $content = null): HtmlElement
    {
        $el = new HtmlElement('div');
        if ($content !== null) {
            $el->setContent($content);
        }
        return $el;
    }

    // ------------------------------------------------------------------
    // openTag()
    // ------------------------------------------------------------------

    public function testOpenTagReturnsOpeningTagWithoutClose(): void
    {
        $el = new HtmlElement('div');
        $open = $el->openTag();
        $this->assertStringStartsWith('<div', $open);
        $this->assertStringNotContainsString('</div>', $open);
    }

    public function testOpenTagIncludesAttributes(): void
    {
        $el = new HtmlElement('div');
        $el->addCSSClass('container');
        $open = $el->openTag();
        $this->assertStringContainsString('class="container"', $open);
        $this->assertStringNotContainsString('</div>', $open);
    }

    public function testOpenTagIncludesChildren(): void
    {
        $inner = new HtmlElement('p');
        $outer = new HtmlElement('div');
        $outer->addNested($inner);

        $open = $outer->openTag();
        $this->assertStringContainsString('<p', $open);
        $this->assertStringNotContainsString('</div>', $open);
    }

    // ------------------------------------------------------------------
    // closeTag()
    // ------------------------------------------------------------------

    public function testCloseTagReturnsClosingTag(): void
    {
        $el = new HtmlElement('div');
        $this->assertEquals('</div>', $el->closeTag());
    }

    public function testCloseTagIsEmptyForVoidElement(): void
    {
        $el = new HtmlElement('br');
        // Force void mode as done in HtmlBr
        $reflection = new ReflectionProperty(HtmlElement::class, 'empty');
        $reflection->setAccessible(true);
        $reflection->setValue($el, true);

        $this->assertEquals('', $el->closeTag());
    }

    // ------------------------------------------------------------------
    // open + close reconstruct full element
    // ------------------------------------------------------------------

    public function testOpenPlusCloseEqualsGetHtml(): void
    {
        $el = new HtmlElement('section');
        $el->addCSSClass('main-content');
        $inner = new HtmlElement('p');
        $outer = new HtmlElement('section');
        $outer->addCSSClass('main-content');

        $this->assertEquals($outer->getHtml(), $outer->openTag() . $outer->closeTag());
    }

    public function testOpenAndCloseAreSymmetric(): void
    {
        $el = new HtmlElement('article');
        $el->setAttribute('id', 'my-article');

        $combined = $el->openTag() . $el->closeTag();
        $this->assertEquals($el->getHtml(), $combined);
    }
}
