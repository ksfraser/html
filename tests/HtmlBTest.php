<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlB;

class HtmlBTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $b = new HtmlB($mock);
        $this->assertInstanceOf(HtmlB::class, $b);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('bold');
        $b = new HtmlB($mock);
        $html = $b->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringContainsString('bold', $html);
        $this->assertStringEndsWith('</b>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('bold');
        $b = new HtmlB($mock);
        ob_start();
        $b->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<b', $output);
        $this->assertStringContainsString('bold', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $b = new HtmlB($mock);
        $html = $b->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringEndsWith('</b>', $html);
    }
}
