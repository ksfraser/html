<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlBold;

class HtmlBoldTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $bold = new HtmlBold($mock);
        $this->assertInstanceOf(HtmlBold::class, $bold);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('bold');
        $bold = new HtmlBold($mock);
        $html = $bold->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringContainsString('bold', $html);
        $this->assertStringEndsWith('</b>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('bold');
        $bold = new HtmlBold($mock);
        ob_start();
        $bold->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<b', $output);
        $this->assertStringContainsString('bold', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $bold = new HtmlBold($mock);
        $html = $bold->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringEndsWith('</b>', $html);
    }
}
