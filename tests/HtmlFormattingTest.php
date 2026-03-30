<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlFormatting;

class HtmlFormattingTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $fmt = new HtmlFormatting($mock);
        $this->assertInstanceOf(HtmlFormatting::class, $fmt);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('fmt');
        $fmt = new HtmlFormatting($mock);
        $html = $fmt->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('fmt', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('fmt');
        $fmt = new HtmlFormatting($mock);
        ob_start();
        $fmt->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('fmt', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $fmt = new HtmlFormatting($mock);
        $html = $fmt->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
