<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlDt;

class HtmlDtTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dt');
        $dt = new HtmlDt($mock);
        $html = $dt->getHtml();
        $this->assertStringContainsString('<dt', $html);
        $this->assertStringContainsString('dt', $html);
        $this->assertStringEndsWith('</dt>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dt');
        $dt = new HtmlDt($mock);
        ob_start();
        $dt->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dt', $output);
        $this->assertStringContainsString('dt', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $dt = new HtmlDt($mock);
        $html = $dt->getHtml();
        $this->assertStringContainsString('<dt', $html);
        $this->assertStringEndsWith('</dt>', $html);
    }
}
