<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlHr;

class HtmlHrTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $hr = new HtmlHr($mock);
        $html = $hr->getHtml();
        $this->assertStringContainsString('<hr', $html);
        $this->assertStringEndsWith('/>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $hr = new HtmlHr($mock);
        ob_start();
        $hr->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<hr', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
