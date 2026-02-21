<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlMeter;

class HtmlMeterTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('meter');
        $meter = new HtmlMeter($mock);
        $html = $meter->getHtml();
        $this->assertStringContainsString('<meter', $html);
        $this->assertStringContainsString('meter', $html);
        $this->assertStringEndsWith('</meter>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('meter');
        $meter = new HtmlMeter($mock);
        ob_start();
        $meter->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<meter', $output);
        $this->assertStringContainsString('meter', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $meter = new HtmlMeter($mock);
        $html = $meter->getHtml();
        $this->assertStringContainsString('<meter', $html);
        $this->assertStringEndsWith('</meter>', $html);
    }
}
