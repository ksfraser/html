<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlCite;

/**
 * class HtmlCiteTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlCiteTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('cite');
        $cite = new HtmlCite($mock);
        $html = $cite->getHtml();
        $this->assertStringContainsString('<cite', $html);
        $this->assertStringContainsString('cite', $html);
        $this->assertStringEndsWith('</cite>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('cite');
        $cite = new HtmlCite($mock);
        ob_start();
        $cite->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<cite', $output);
        $this->assertStringContainsString('cite', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $cite = new HtmlCite($mock);
        $html = $cite->getHtml();
        $this->assertStringContainsString('<cite', $html);
        $this->assertStringEndsWith('</cite>', $html);
    }
}
