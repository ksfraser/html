<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlWbr;

/**
 * class HtmlWbrTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlWbrTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlWbrTest extends TestCase {
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
        $wbr = new HtmlWbr($mock);
        $html = $wbr->getHtml();
        $this->assertStringContainsString('<wbr', $html);
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
        $wbr = new HtmlWbr($mock);
        ob_start();
        $wbr->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<wbr', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
