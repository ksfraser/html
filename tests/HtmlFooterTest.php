<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFooter;

class HtmlFooterTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('footer');
        $footer = new HtmlFooter($mock);
        $html = $footer->getHtml();
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringContainsString('footer', $html);
        $this->assertStringEndsWith('</footer>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('footer');
        $footer = new HtmlFooter($mock);
        ob_start();
        $footer->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<footer', $output);
        $this->assertStringContainsString('footer', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $footer = new HtmlFooter($mock);
        $html = $footer->getHtml();
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringEndsWith('</footer>', $html);
    }
}
