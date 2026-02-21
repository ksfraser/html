<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOl;

class HtmlOlTest extends TestCase {
    public function testInstance() {
        $ol = new HtmlOl(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOl::class, $ol);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringContainsString('ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        ob_start();
        $ol->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ol', $output);
        $this->assertStringContainsString('ol', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }
}
