<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBr;

class HtmlBrTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $br = new HtmlBr($mock);
        $html = $br->getHtml();
        $this->assertStringContainsString('<br', $html);
        $this->assertStringEndsWith('/>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $br = new HtmlBr($mock);
        ob_start();
        $br->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<br', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
