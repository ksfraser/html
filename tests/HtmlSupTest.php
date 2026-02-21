<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSup;

class HtmlSupTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $sup = new HtmlSup($mock);
        $this->assertInstanceOf(HtmlSup::class, $sup);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sup');
        $sup = new HtmlSup($mock);
        $html = $sup->getHtml();
        $this->assertStringContainsString('<sup', $html);
        $this->assertStringContainsString('sup', $html);
        $this->assertStringEndsWith('</sup>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sup');
        $sup = new HtmlSup($mock);
        ob_start();
        $sup->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<sup', $output);
        $this->assertStringContainsString('sup', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $sup = new HtmlSup($mock);
        $html = $sup->getHtml();
        $this->assertStringContainsString('<sup', $html);
        $this->assertStringEndsWith('</sup>', $html);
    }
}
