<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlInline;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlInlineTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('inline');
        $inline = new HtmlInline($mock);
        $html = $inline->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('inline', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('inline');
        $inline = new HtmlInline($mock);
        ob_start();
        $inline->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('inline', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $inline = new HtmlInline($mock);
        $html = $inline->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
