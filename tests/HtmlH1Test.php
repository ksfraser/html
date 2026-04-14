<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH1;

/**
 * class HtmlH1Test
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlH1Test
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlH1Test extends TestCase {
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
        $mock->method('getHtml')->willReturn('h1');
        $h1 = new HtmlH1($mock);
        $html = $h1->getHtml();
        $this->assertStringContainsString('<h1', $html);
        $this->assertStringContainsString('h1', $html);
        $this->assertStringEndsWith('</h1>', $html);
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
        $mock->method('getHtml')->willReturn('h1');
        $h1 = new HtmlH1($mock);
        ob_start();
        $h1->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h1', $output);
        $this->assertStringContainsString('h1', $output);
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
        $h1 = new HtmlH1($mock);
        $html = $h1->getHtml();
        $this->assertStringContainsString('<h1', $html);
        $this->assertStringEndsWith('</h1>', $html);
    }
}
