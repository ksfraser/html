<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlProgress;

class HtmlProgressTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('progress');
        $progress = new HtmlProgress($mock);
        $html = $progress->getHtml();
        $this->assertStringContainsString('<progress', $html);
        $this->assertStringContainsString('progress', $html);
        $this->assertStringEndsWith('</progress>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('progress');
        $progress = new HtmlProgress($mock);
        ob_start();
        $progress->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<progress', $output);
        $this->assertStringContainsString('progress', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $progress = new HtmlProgress($mock);
        $html = $progress->getHtml();
        $this->assertStringContainsString('<progress', $html);
        $this->assertStringEndsWith('</progress>', $html);
    }
}
