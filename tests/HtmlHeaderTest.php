<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlHeader;

class HtmlHeaderTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('header');
        $header = new HtmlHeader($mock);
        $html = $header->getHtml();
        $this->assertStringContainsString('<header', $html);
        $this->assertStringContainsString('header', $html);
        $this->assertStringEndsWith('</header>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('header');
        $header = new HtmlHeader($mock);
        ob_start();
        $header->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<header', $output);
        $this->assertStringContainsString('header', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $header = new HtmlHeader($mock);
        $html = $header->getHtml();
        $this->assertStringContainsString('<header', $html);
        $this->assertStringEndsWith('</header>', $html);
    }
}
