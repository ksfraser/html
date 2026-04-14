<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlItalic;

/**
 * class HtmlItalicTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlItalicTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlItalicTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testInstance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $italic = new HtmlItalic($mock);
        $this->assertInstanceOf(HtmlItalic::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $italic);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('italic');
        $italic = new HtmlItalic($mock);
        $html = $italic->getHtml();
        $this->assertStringContainsString('<i', $html);
        $this->assertStringContainsString('italic', $html);
        $this->assertStringEndsWith('</i>', $html);
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
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('italic');
        $italic = new HtmlItalic($mock);
        ob_start();
        $italic->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<i', $output);
        $this->assertStringContainsString('italic', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testEdgeCasesEmptyContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $italic = new HtmlItalic($mock);
        $html = $italic->getHtml();
        $this->assertStringContainsString('<i', $html);
        $this->assertStringEndsWith('</i>', $html);
    }
}
