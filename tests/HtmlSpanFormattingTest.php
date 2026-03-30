<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSpanFormatting;

class HtmlSpanFormattingTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('spanformatting');
        $spanformatting = new HtmlSpanFormatting($mock);
        $html = $spanformatting->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('spanformatting', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

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

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $spanformatting = new HtmlSpanFormatting($mock);
        $html = $spanformatting->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
