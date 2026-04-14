<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlParagraphFormatting;

/**
 * class HtmlParagraphFormattingTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlParagraphFormattingTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('paragraphformatting');
        $paragraphformatting = new HtmlParagraphFormatting($mock);
        $html = $paragraphformatting->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringContainsString('paragraphformatting', $html);
        $this->assertStringEndsWith('</p>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('paragraphformatting');
        $paragraphformatting = new HtmlParagraphFormatting($mock);
        ob_start();
        $paragraphformatting->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('paragraphformatting', $output);
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
        $paragraphformatting = new HtmlParagraphFormatting($mock);
        $html = $paragraphformatting->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }
}
