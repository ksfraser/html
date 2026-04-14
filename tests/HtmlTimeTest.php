<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlTime;

/**
 * class HtmlTimeTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlTimeTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlTimeTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('time');
        $time = new HtmlTime($mock);
        $html = $time->getHtml();
        $this->assertStringContainsString('<time', $html);
        $this->assertStringContainsString('time', $html);
        $this->assertStringEndsWith('</time>', $html);
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
        $mock->method('getHtml')->willReturn('time');
        $time = new HtmlTime($mock);
        ob_start();
        $time->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<time', $output);
        $this->assertStringContainsString('time', $output);
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
        $time = new HtmlTime($mock);
        $html = $time->getHtml();
        $this->assertStringContainsString('<time', $html);
        $this->assertStringEndsWith('</time>', $html);
    }
}
