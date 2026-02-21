<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlBlockFormatting;

class HtmlBlockFormattingTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockformatting');
        $blockformatting = new HtmlBlockFormatting($mock);
        $html = $blockformatting->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringContainsString('blockformatting', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockformatting');
        $blockformatting = new HtmlBlockFormatting($mock);
        ob_start();
        $blockformatting->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div', $output);
        $this->assertStringContainsString('blockformatting', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $blockformatting = new HtmlBlockFormatting($mock);
        $html = $blockformatting->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }
}
