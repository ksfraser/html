<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlBold;

/**
 * class HtmlBoldTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlBoldTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlBoldTest extends TestCase {
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
        $bold = new HtmlBold($mock);
        $this->assertInstanceOf(HtmlBold::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $bold);
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
        $mock->method('getHtml')->willReturn('bold');
        $bold = new HtmlBold($mock);
        $html = $bold->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringContainsString('bold', $html);
        $this->assertStringEndsWith('</b>', $html);
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
        $mock->method('getHtml')->willReturn('bold');
        $bold = new HtmlBold($mock);
        ob_start();
        $bold->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<b', $output);
        $this->assertStringContainsString('bold', $output);
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
        $bold = new HtmlBold($mock);
        $html = $bold->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringEndsWith('</b>', $html);
    }
}
