<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlEmptyElement;
use Ksfraser\HTML\HtmlElement;

class HtmlEmptyElementTest extends TestCase {
    public function testExtendsHtmlElement() {
        $empty = new HtmlEmptyElement();
        $this->assertInstanceOf(HtmlElement::class, $empty);
    }

    // Add more tests for all public methods and edge cases
}
