<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlFigcaption;

class HtmlFigcaptionTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('figcaption');
        $figcaption = new HtmlFigcaption($mock);
        $html = $figcaption->getHtml();
        $this->assertStringContainsString('<figcaption', $html);
        $this->assertStringContainsString('figcaption', $html);
        $this->assertStringEndsWith('</figcaption>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('figcaption');
        $figcaption = new HtmlFigcaption($mock);
        ob_start();
        $figcaption->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<figcaption', $output);
        $this->assertStringContainsString('figcaption', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $figcaption = new HtmlFigcaption($mock);
        $html = $figcaption->getHtml();
        $this->assertStringContainsString('<figcaption', $html);
        $this->assertStringEndsWith('</figcaption>', $html);
    }
}
