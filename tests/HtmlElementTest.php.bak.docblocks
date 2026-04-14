<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlElementTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlElementTest extends TestCase {
/**
 * testConstructAndImplementsInterface
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testConstructAndImplementsInterface() {
        $element = new HtmlElement();
        $this->assertInstanceOf(HtmlElementInterface::class, $element);
    }

/**
 * testAddNestedReturnsSelf
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testAddNestedReturnsSelf() {
        $element = new HtmlElement();
        $child = new HtmlElement();
        $result = $element->addNested($child);
        $this->assertSame($element, $result);
    }

/**
 * testSetTagAndGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testSetTagAndGetHtml() {
        $element = new HtmlElement();
        $element->setTag('div');
        $html = $element->getHtml();
        $this->assertStringStartsWith('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

/**
 * testSetAttributeAndGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testSetAttributeAndGetHtml() {
        $element = new HtmlElement();
        $element->setTag('span')->setAttribute('id', 'foo');
        $html = $element->getHtml();
        $this->assertStringContainsString('id="foo"', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $element = new HtmlElement();
        $element->setTag('p')->setAttribute('class', 'bar');
        ob_start();
        $element->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('class="bar"', $output);
    }

/**
 * testAddNestedChildRendersHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testAddNestedChildRendersHtml() {
        $parent = new HtmlElement();
        $parent->setTag('div');
        $child = new HtmlElement();
        $child->setTag('span')->setAttribute('id', 'child');
        $parent->addNested($child);
        $html = $parent->getHtml();
        $this->assertStringContainsString('<span id="child"', $html);
    }

/**
 * testEdgeCasesEmptyElement
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
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
