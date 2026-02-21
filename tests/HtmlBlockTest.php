<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBlock;

class HtmlBlockTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('block');
        $block = new HtmlBlock($mock);
        $html = $block->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringContainsString('block', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('block');
        $block = new HtmlBlock($mock);
        ob_start();
        $block->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div', $output);
        $this->assertStringContainsString('block', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $block = new HtmlBlock($mock);
        $html = $block->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }
}
