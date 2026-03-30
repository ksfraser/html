<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSub;

class HtmlSubTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $sub = new HtmlSub($mock);
        $this->assertInstanceOf(HtmlSub::class, $sub);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sub');
        $sub = new HtmlSub($mock);
        $html = $sub->getHtml();
        $this->assertStringContainsString('<sub', $html);
        $this->assertStringContainsString('sub', $html);
        $this->assertStringEndsWith('</sub>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sub');
        $sub = new HtmlSub($mock);
        ob_start();
        $sub->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<sub', $output);
        $this->assertStringContainsString('sub', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $sub = new HtmlSub($mock);
        $html = $sub->getHtml();
        $this->assertStringContainsString('<sub', $html);
        $this->assertStringEndsWith('</sub>', $html);
    }
}
