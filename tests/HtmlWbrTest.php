<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlWbr;

class HtmlWbrTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $wbr = new HtmlWbr($mock);
        $html = $wbr->getHtml();
        $this->assertStringContainsString('<wbr', $html);
        $this->assertStringEndsWith('/>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $wbr = new HtmlWbr($mock);
        ob_start();
        $wbr->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<wbr', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
