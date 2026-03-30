<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSamp;

class HtmlSampTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('samp');
        $samp = new HtmlSamp($mock);
        $html = $samp->getHtml();
        $this->assertStringContainsString('<samp', $html);
        $this->assertStringContainsString('samp', $html);
        $this->assertStringEndsWith('</samp>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('samp');
        $samp = new HtmlSamp($mock);
        ob_start();
        $samp->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<samp', $output);
        $this->assertStringContainsString('samp', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $samp = new HtmlSamp($mock);
        $html = $samp->getHtml();
        $this->assertStringContainsString('<samp', $html);
        $this->assertStringEndsWith('</samp>', $html);
    }
}
