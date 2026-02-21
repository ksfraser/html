<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlOl;

class HtmlOlTest extends TestCase {
    public function testInstance() {
        $ol = new HtmlOl(new HtmlString('ol content'));
        $this->assertInstanceOf(HtmlOl::class, $ol);
    }

    public function testTagIsOl() {
        $ol = new HtmlOl(new HtmlString('ol content'));
        $this->assertEquals('ol', $ol->tag);
    }

    public function testToStringReturnsExpectedHtml() {
        $ol = new HtmlOl(new HtmlString('ol content'));
        $html = (string)$ol;
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringContainsString('ol content', $html);
        $this->assertStringContainsString('</ol>', $html);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringContainsString('ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        ob_start();
        $ol->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ol', $output);
        $this->assertStringContainsString('ol', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }
}
