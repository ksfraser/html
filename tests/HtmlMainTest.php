<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMain;

class HtmlMainTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('main');
        $main = new HtmlMain($mock);
        $html = $main->getHtml();
        $this->assertStringContainsString('<main', $html);
        $this->assertStringContainsString('main', $html);
        $this->assertStringEndsWith('</main>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('main');
        $main = new HtmlMain($mock);
        ob_start();
        $main->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<main', $output);
        $this->assertStringContainsString('main', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $main = new HtmlMain($mock);
        $html = $main->getHtml();
        $this->assertStringContainsString('<main', $html);
        $this->assertStringEndsWith('</main>', $html);
    }
}
