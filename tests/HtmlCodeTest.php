<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlCode;

/**
 * class HtmlCodeTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlCodeTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlCodeTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
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
        $mock->method('getHtml')->willReturn('code');
        $code = new HtmlCode($mock);
        $html = $code->getHtml();
        $this->assertStringContainsString('<code', $html);
        $this->assertStringContainsString('code', $html);
        $this->assertStringEndsWith('</code>', $html);
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
        $mock->method('getHtml')->willReturn('code');
        $code = new HtmlCode($mock);
        ob_start();
        $code->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<code', $output);
        $this->assertStringContainsString('code', $output);
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
        $code = new HtmlCode($mock);
        $html = $code->getHtml();
        $this->assertStringContainsString('<code', $html);
        $this->assertStringEndsWith('</code>', $html);
    }
}
