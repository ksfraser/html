<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH3;

class HtmlH3Test extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h3');
        $h3 = new HtmlH3($mock);
        $html = $h3->getHtml();
        $this->assertStringContainsString('<h3', $html);
        $this->assertStringContainsString('h3', $html);
        $this->assertStringEndsWith('</h3>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h3');
        $h3 = new HtmlH3($mock);
        ob_start();
        $h3->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h3', $output);
        $this->assertStringContainsString('h3', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h3 = new HtmlH3($mock);
        $html = $h3->getHtml();
        $this->assertStringContainsString('<h3', $html);
        $this->assertStringEndsWith('</h3>', $html);
    }
}
