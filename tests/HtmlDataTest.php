<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlData;

class HtmlDataTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('data');
        $data = new HtmlData($mock);
        $html = $data->getHtml();
        $this->assertStringContainsString('<data', $html);
        $this->assertStringContainsString('data', $html);
        $this->assertStringEndsWith('</data>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('data');
        $data = new HtmlData($mock);
        ob_start();
        $data->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<data', $output);
        $this->assertStringContainsString('data', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $data = new HtmlData($mock);
        $html = $data->getHtml();
        $this->assertStringContainsString('<data', $html);
        $this->assertStringEndsWith('</data>', $html);
    }
}
