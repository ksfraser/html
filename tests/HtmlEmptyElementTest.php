<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlEmptyElement;
use Ksfraser\HTML\HtmlElement;

/**
 * class HtmlEmptyElementTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlEmptyElementTest extends TestCase {
/**
 * testExtendsHtmlElement
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testExtendsHtmlElement() {
        $empty = new HtmlEmptyElement();
        $this->assertInstanceOf(HtmlElement::class, $empty);
    }

/**
 * testGetHtmlEmptyTag
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtmlEmptyTag() {
        $empty = new HtmlEmptyElement();
        $empty->setTag('hr');
        $html = $empty->getHtml();
        $this->assertStringStartsWith('<hr', $html);
        $this->assertStringEndsWith('>', $html);
        $this->assertStringNotContainsString('</hr>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $empty = new HtmlEmptyElement();
        $empty->setTag('img');
        ob_start();
        $empty->toHtml();
        $output = ob_get_clean();
        $this->assertStringStartsWith('<img', $output);
    }

/**
 * testEdgeCasesNoTag
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesNoTag() {
        $empty = new HtmlEmptyElement();
        $html = $empty->getHtml();
        $this->assertStringStartsWith('<', $html);
    }
}
