<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDfn;

class HtmlDfTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDfn($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<dfn', $html);
        $this->assertStringContainsString('df', $html);
        $this->assertStringEndsWith('</dfn>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDfn($mock);
        ob_start();
        $df->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dfn', $output);
        $this->assertStringContainsString('df', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $df = new HtmlDfn($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<dfn', $html);
        $this->assertStringEndsWith('</dfn>', $html);
    }
}
