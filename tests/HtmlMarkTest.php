<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMark;

class HtmlMarkTest extends TestCase {
    public function testInstance() {
        $mark = new HtmlMark('marked text');
        $this->assertInstanceOf(HtmlMark::class, $mark);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringContainsString('mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        ob_start();
        $mark->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<mark', $output);
        $this->assertStringContainsString('mark', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }
}
