<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSmall;

class HtmlSmallTest extends TestCase {
    public function testInstance() {
        $small = new HtmlSmall('small text');
        $this->assertInstanceOf(HtmlSmall::class, $small);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringContainsString('small', $html);
        $this->assertStringEndsWith('</small>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        ob_start();
        $small->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<small', $output);
        $this->assertStringContainsString('small', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringEndsWith('</small>', $html);
    }
}
