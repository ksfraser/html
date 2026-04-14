<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSpanFormatting;

/**
 * class HtmlSpanFormattingTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSpanFormattingTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('spanformatting');
        $spanformatting = new HtmlSpanFormatting($mock);
        $html = $spanformatting->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('spanformatting', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('spanformatting');
        $spanformatting = new HtmlSpanFormatting($mock);
        ob_start();
        $spanformatting->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('spanformatting', $output);
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
        $spanformatting = new HtmlSpanFormatting($mock);
        $html = $spanformatting->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
