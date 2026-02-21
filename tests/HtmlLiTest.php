<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlLi;

class HtmlLiTest extends TestCase {
    public function testInstance() {
        $li = new HtmlLi('item');
        $this->assertInstanceOf(HtmlLi::class, $li);
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
