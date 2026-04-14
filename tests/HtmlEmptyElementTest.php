<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlEmptyElement;
use Ksfraser\HTML\HtmlElement;

/**
 * class HtmlEmptyElementTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlEmptyElementTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlEmptyElementTest extends TestCase {
/**
 * testExtendsHtmlElement
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testExtendsHtmlElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testExtendsHtmlElement() {
        $empty = new HtmlEmptyElement();
        $this->assertInstanceOf(HtmlElement::/**
 * testGetHtmlEmptyTag
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $empty);
    }

/**
 * testGetHtmlEmptyTag
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetHtmlEmptyTag
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetHtmlEmptyTag() {
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
    public /**
 * testToHtmlOutputsHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testToHtmlOutputsHtml() {
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
    public /**
 * testEdgeCasesNoTag
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEdgeCasesNoTag() {
        $empty = new HtmlEmptyElement();
        $html = $empty->getHtml();
        $this->assertStringStartsWith('<', $html);
    }
}
