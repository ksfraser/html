<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlCite;

class HtmlCiteTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('cite');
        $cite = new HtmlCite($mock);
        $html = $cite->getHtml();
        $this->assertStringContainsString('<cite', $html);
        $this->assertStringContainsString('cite', $html);
        $this->assertStringEndsWith('</cite>', $html);
    }

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

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $cite = new HtmlCite($mock);
        $html = $cite->getHtml();
        $this->assertStringContainsString('<cite', $html);
        $this->assertStringEndsWith('</cite>', $html);
    }
}
