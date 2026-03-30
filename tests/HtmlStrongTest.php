<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlStrong;

class HtmlStrongTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $strong = new HtmlStrong($mock);
        $this->assertInstanceOf(HtmlStrong::class, $strong);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('strong');
        $strong = new HtmlStrong($mock);
        $html = $strong->getHtml();
        $this->assertStringContainsString('<strong', $html);
        $this->assertStringContainsString('strong', $html);
        $this->assertStringEndsWith('</strong>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('strong');
        $strong = new HtmlStrong($mock);
        ob_start();
        $strong->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<strong', $output);
        $this->assertStringContainsString('strong', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $strong = new HtmlStrong($mock);
        $html = $strong->getHtml();
        $this->assertStringContainsString('<strong', $html);
        $this->assertStringEndsWith('</strong>', $html);
    }
}
