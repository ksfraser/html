<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDl;

class HtmlDlTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dl');
        $dl = new HtmlDl($mock);
        $html = $dl->getHtml();
        $this->assertStringContainsString('<dl', $html);
        $this->assertStringContainsString('dl', $html);
        $this->assertStringEndsWith('</dl>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dl');
        $dl = new HtmlDl($mock);
        ob_start();
        $dl->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dl', $output);
        $this->assertStringContainsString('dl', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $dl = new HtmlDl($mock);
        $html = $dl->getHtml();
        $this->assertStringContainsString('<dl', $html);
        $this->assertStringEndsWith('</dl>', $html);
    }
}
