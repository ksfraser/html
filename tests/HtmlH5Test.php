<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlH5;

class HtmlH5Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h5');
        $h5 = new HtmlH5($mock);
        $html = $h5->getHtml();
        $this->assertStringContainsString('<h5', $html);
        $this->assertStringContainsString('h5', $html);
        $this->assertStringEndsWith('</h5>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h5');
        $h5 = new HtmlH5($mock);
        ob_start();
        $h5->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h5', $output);
        $this->assertStringContainsString('h5', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h5 = new HtmlH5($mock);
        $html = $h5->getHtml();
        $this->assertStringContainsString('<h5', $html);
        $this->assertStringEndsWith('</h5>', $html);
    }
}
