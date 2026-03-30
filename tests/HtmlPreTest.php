<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPre;

class HtmlPreTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('pre');
        $pre = new HtmlPre($mock);
        $html = $pre->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringContainsString('pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('pre');
        $pre = new HtmlPre($mock);
        ob_start();
        $pre->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<pre', $output);
        $this->assertStringContainsString('pre', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $pre = new HtmlPre($mock);
        $html = $pre->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }
}
