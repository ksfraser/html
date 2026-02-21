<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlH4;

class HtmlH4Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h4');
        $h4 = new HtmlH4($mock);
        $html = $h4->getHtml();
        $this->assertStringContainsString('<h4', $html);
        $this->assertStringContainsString('h4', $html);
        $this->assertStringEndsWith('</h4>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h4');
        $h4 = new HtmlH4($mock);
        ob_start();
        $h4->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h4', $output);
        $this->assertStringContainsString('h4', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h4 = new HtmlH4($mock);
        $html = $h4->getHtml();
        $this->assertStringContainsString('<h4', $html);
        $this->assertStringEndsWith('</h4>', $html);
    }
}
