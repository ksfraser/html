<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH2;

class HtmlH2Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringContainsString('h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        ob_start();
        $h2->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h2', $output);
        $this->assertStringContainsString('h2', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
    }
}
