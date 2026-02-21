<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDd;

class HtmlDdTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dd');
        $dd = new HtmlDd($mock);
        $html = $dd->getHtml();
        $this->assertStringContainsString('<dd', $html);
        $this->assertStringContainsString('dd', $html);
        $this->assertStringEndsWith('</dd>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dd');
        $dd = new HtmlDd($mock);
        ob_start();
        $dd->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dd', $output);
        $this->assertStringContainsString('dd', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $dd = new HtmlDd($mock);
        $html = $dd->getHtml();
        $this->assertStringContainsString('<dd', $html);
        $this->assertStringEndsWith('</dd>', $html);
    }
}
