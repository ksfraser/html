<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAside;

class HtmlAsideTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('aside');
        $aside = new HtmlAside($mock);
        $html = $aside->getHtml();
        $this->assertStringContainsString('<aside', $html);
        $this->assertStringContainsString('aside', $html);
        $this->assertStringEndsWith('</aside>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('aside');
        $aside = new HtmlAside($mock);
        ob_start();
        $aside->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<aside', $output);
        $this->assertStringContainsString('aside', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $aside = new HtmlAside($mock);
        $html = $aside->getHtml();
        $this->assertStringContainsString('<aside', $html);
        $this->assertStringEndsWith('</aside>', $html);
    }
}
