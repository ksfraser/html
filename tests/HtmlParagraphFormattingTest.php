<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlParagraphFormatting;

class HtmlParagraphFormattingTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('paragraphformatting');
        $paragraphformatting = new HtmlParagraphFormatting($mock);
        $html = $paragraphformatting->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringContainsString('paragraphformatting', $html);
        $this->assertStringEndsWith('</p>', $html);
    }

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

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $paragraphformatting = new HtmlParagraphFormatting($mock);
        $html = $paragraphformatting->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }
}
