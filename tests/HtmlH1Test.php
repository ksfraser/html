<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlH1;

class HtmlH1Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h1');
        $h1 = new HtmlH1($mock);
        $html = $h1->getHtml();
        $this->assertStringContainsString('<h1', $html);
        $this->assertStringContainsString('h1', $html);
        $this->assertStringEndsWith('</h1>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h1');
        $h1 = new HtmlH1($mock);
        ob_start();
        $h1->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h1', $output);
        $this->assertStringContainsString('h1', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h1 = new HtmlH1($mock);
        $html = $h1->getHtml();
        $this->assertStringContainsString('<h1', $html);
        $this->assertStringEndsWith('</h1>', $html);
    }
}
