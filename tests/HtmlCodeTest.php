<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlCode;

class HtmlCodeTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('code');
        $code = new HtmlCode($mock);
        $html = $code->getHtml();
        $this->assertStringContainsString('<code', $html);
        $this->assertStringContainsString('code', $html);
        $this->assertStringEndsWith('</code>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('code');
        $code = new HtmlCode($mock);
        ob_start();
        $code->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<code', $output);
        $this->assertStringContainsString('code', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $code = new HtmlCode($mock);
        $html = $code->getHtml();
        $this->assertStringContainsString('<code', $html);
        $this->assertStringEndsWith('</code>', $html);
    }
}
