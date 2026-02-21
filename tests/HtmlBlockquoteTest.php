<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBlockquote;

class HtmlBlockquoteTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockquote');
        $blockquote = new HtmlBlockquote($mock);
        $html = $blockquote->getHtml();
        $this->assertStringContainsString('<blockquote', $html);
        $this->assertStringContainsString('blockquote', $html);
        $this->assertStringEndsWith('</blockquote>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockquote');
        $blockquote = new HtmlBlockquote($mock);
        ob_start();
        $blockquote->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<blockquote', $output);
        $this->assertStringContainsString('blockquote', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $blockquote = new HtmlBlockquote($mock);
        $html = $blockquote->getHtml();
        $this->assertStringContainsString('<blockquote', $html);
        $this->assertStringEndsWith('</blockquote>', $html);
    }
}
