<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlHr;

/**
 * class HtmlHrTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlHrTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlHrTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('');
        $hr = new HtmlHr($mock);
        $html = $hr->getHtml();
        $this->assertStringContainsString('<hr', $html);
        $this->assertStringEndsWith('/>', $html);
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
        $mock->method('getHtml')->willReturn('');
        $hr = new HtmlHr($mock);
        ob_start();
        $hr->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<hr', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
