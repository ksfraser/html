<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlElementTest extends TestCase {
    public function testConstructAndImplementsInterface() {
        $element = new HtmlElement();
        $this->assertInstanceOf(HtmlElementInterface::class, $element);
    }

    public function testAddNestedReturnsSelf() {
        $element = new HtmlElement();
        $child = new HtmlElement();
        $result = $element->addNested($child);
        $this->assertSame($element, $result);
    }

    // Add more tests for all public methods and edge cases
}
