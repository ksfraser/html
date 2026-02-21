<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOutput;

class HtmlOutputTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('output');
        $output = new HtmlOutput($mock);
        $html = $output->getHtml();
        $this->assertStringContainsString('<output', $html);
        $this->assertStringContainsString('output', $html);
        $this->assertStringEndsWith('</output>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('output');
        $output = new HtmlOutput($mock);
        ob_start();
        $output->toHtml();
        $out = ob_get_clean();
        $this->assertStringContainsString('<output', $out);
        $this->assertStringContainsString('output', $out);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $output = new HtmlOutput($mock);
        $html = $output->getHtml();
        $this->assertStringContainsString('<output', $html);
        $this->assertStringEndsWith('</output>', $html);
    }
}
