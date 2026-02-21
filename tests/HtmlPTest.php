<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlP;

class HtmlPTest extends TestCase {
    public function testInstance() {
        $p = new HtmlP('paragraph text');
        $this->assertInstanceOf(HtmlP::class, $p);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringContainsString('p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        ob_start();
        $p->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('p', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }
}
