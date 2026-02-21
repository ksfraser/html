<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlMark;

class HtmlMarkTest extends TestCase {
    public function testInstance() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $this->assertInstanceOf(HtmlMark::class, $mark);
    }

    public function testTagIsMark() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $this->assertEquals('mark', $mark->tag);
    }

    public function testToStringReturnsExpectedHtml() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $html = (string)$mark;
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringContainsString('marked text', $html);
        $this->assertStringContainsString('</mark>', $html);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringContainsString('mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        ob_start();
        $mark->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<mark', $output);
        $this->assertStringContainsString('mark', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }
}
