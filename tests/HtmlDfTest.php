<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlDf;

class HtmlDfTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDf($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<df', $html);
        $this->assertStringContainsString('df', $html);
        $this->assertStringEndsWith('</df>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDf($mock);
        ob_start();
        $df->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<df', $output);
        $this->assertStringContainsString('df', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $df = new HtmlDf($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<df', $html);
        $this->assertStringEndsWith('</df>', $html);
    }
}
