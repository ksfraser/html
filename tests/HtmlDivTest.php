<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDiv;

class HtmlDivTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $div = new HtmlDiv($mock);
        $this->assertInstanceOf(HtmlDiv::class, $div);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('div');
        $div = new HtmlDiv($mock);
        $html = $div->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringContainsString('div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('div');
        $div = new HtmlDiv($mock);
        ob_start();
        $div->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div', $output);
        $this->assertStringContainsString('div', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $div = new HtmlDiv($mock);
        $html = $div->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }
}
