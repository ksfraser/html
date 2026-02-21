<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlLi;

class HtmlLiTest extends TestCase {
    public function testInstance() {
        $li = new HtmlLi(new HtmlString('item'));
        $this->assertInstanceOf(HtmlLi::class, $li);
    }

    public function testTagIsLi() {
        $li = new HtmlLi(new HtmlString('item'));
        $this->assertEquals('li', $li->tag);
    }

    public function testToStringReturnsExpectedHtml() {
        $li = new HtmlLi(new HtmlString('item'));
        $html = (string)$li;
        $this->assertStringContainsString('<li', $html);
        $this->assertStringContainsString('item', $html);
        $this->assertStringContainsString('</li>', $html);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('li');
        $li = new HtmlLi($mock);
        $html = $li->getHtml();
        $this->assertStringContainsString('<li', $html);
        $this->assertStringContainsString('li', $html);
        $this->assertStringEndsWith('</li>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('li');
        $li = new HtmlLi($mock);
        ob_start();
        $li->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<li', $output);
        $this->assertStringContainsString('li', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $li = new HtmlLi($mock);
        $html = $li->getHtml();
        $this->assertStringContainsString('<li', $html);
        $this->assertStringEndsWith('</li>', $html);
    }
}
