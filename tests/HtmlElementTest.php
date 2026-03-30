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

    public function testSetTagAndGetHtml() {
        $element = new HtmlElement();
        $element->setTag('div');
        $html = $element->getHtml();
        $this->assertStringStartsWith('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

    public function testSetAttributeAndGetHtml() {
        $element = new HtmlElement();
        $element->setTag('span')->setAttribute('id', 'foo');
        $html = $element->getHtml();
        $this->assertStringContainsString('id="foo"', $html);
    }

    public function testToHtmlOutputsHtml() {
        $element = new HtmlElement();
        $element->setTag('p')->setAttribute('class', 'bar');
        ob_start();
        $element->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('class="bar"', $output);
    }

    public function testAddNestedChildRendersHtml() {
        $parent = new HtmlElement();
        $parent->setTag('div');
        $child = new HtmlElement();
        $child->setTag('span')->setAttribute('id', 'child');
        $parent->addNested($child);
        $html = $parent->getHtml();
        $this->assertStringContainsString('<span id="child"', $html);
    }

    public function testEdgeCasesEmptyElement() {
        $element = new HtmlElement();
        $element->setTag('br');
        // Simulate empty element
        $reflection = new \ReflectionClass($element);
        $property = $reflection->getProperty('empty');
        $property->setAccessible(true);
        $property->setValue($element, true);
        $html = $element->getHtml();
        $this->assertStringStartsWith('<br', $html);
        $this->assertStringEndsWith('>', $html);
        $this->assertStringNotContainsString('</br>', $html);
    }
}
