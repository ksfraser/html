<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSpan;

class HtmlSpanTest extends TestCase {
    public function testInstance() {
        $span = new HtmlSpan(new \Ksfraser\HTML\Elements\HtmlString('content'));
        $this->assertInstanceOf(HtmlSpan::class, $span);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('span');
        $span = new HtmlSpan($mock);
        $html = $span->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('span');
        $span = new HtmlSpan($mock);
        ob_start();
        $span->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('span', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $span = new HtmlSpan($mock);
        $html = $span->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
