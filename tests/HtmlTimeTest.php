<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlTime;

class HtmlTimeTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('time');
        $time = new HtmlTime($mock);
        $html = $time->getHtml();
        $this->assertStringContainsString('<time', $html);
        $this->assertStringContainsString('time', $html);
        $this->assertStringEndsWith('</time>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('time');
        $time = new HtmlTime($mock);
        ob_start();
        $time->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<time', $output);
        $this->assertStringContainsString('time', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $time = new HtmlTime($mock);
        $html = $time->getHtml();
        $this->assertStringContainsString('<time', $html);
        $this->assertStringEndsWith('</time>', $html);
    }
}
