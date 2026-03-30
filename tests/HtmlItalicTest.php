<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlItalic;

class HtmlItalicTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $italic = new HtmlItalic($mock);
        $this->assertInstanceOf(HtmlItalic::class, $italic);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('italic');
        $italic = new HtmlItalic($mock);
        $html = $italic->getHtml();
        $this->assertStringContainsString('<i', $html);
        $this->assertStringContainsString('italic', $html);
        $this->assertStringEndsWith('</i>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('italic');
        $italic = new HtmlItalic($mock);
        ob_start();
        $italic->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<i', $output);
        $this->assertStringContainsString('italic', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $italic = new HtmlItalic($mock);
        $html = $italic->getHtml();
        $this->assertStringContainsString('<i', $html);
        $this->assertStringEndsWith('</i>', $html);
    }
}
