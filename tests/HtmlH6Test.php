<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH6;

class HtmlH6Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h6');
        $h6 = new HtmlH6($mock);
        $html = $h6->getHtml();
        $this->assertStringContainsString('<h6', $html);
        $this->assertStringContainsString('h6', $html);
        $this->assertStringEndsWith('</h6>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h6');
        $h6 = new HtmlH6($mock);
        ob_start();
        $h6->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h6', $output);
        $this->assertStringContainsString('h6', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h6 = new HtmlH6($mock);
        $html = $h6->getHtml();
        $this->assertStringContainsString('<h6', $html);
        $this->assertStringEndsWith('</h6>', $html);
    }
}
