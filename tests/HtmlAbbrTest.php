<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAbbr;

class HtmlAbbrTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('abbr');
        $abbr = new HtmlAbbr($mock);
        $html = $abbr->getHtml();
        $this->assertStringContainsString('<abbr', $html);
        $this->assertStringContainsString('abbr', $html);
        $this->assertStringEndsWith('</abbr>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('abbr');
        $abbr = new HtmlAbbr($mock);
        ob_start();
        $abbr->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<abbr', $output);
        $this->assertStringContainsString('abbr', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $abbr = new HtmlAbbr($mock);
        $html = $abbr->getHtml();
        $this->assertStringContainsString('<abbr', $html);
        $this->assertStringEndsWith('</abbr>', $html);
    }
}
