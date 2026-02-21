<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlQ;

class HtmlQTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('q');
        $q = new HtmlQ($mock);
        $html = $q->getHtml();
        $this->assertStringContainsString('<q', $html);
        $this->assertStringContainsString('q', $html);
        $this->assertStringEndsWith('</q>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('q');
        $q = new HtmlQ($mock);
        ob_start();
        $q->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<q', $output);
        $this->assertStringContainsString('q', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $q = new HtmlQ($mock);
        $html = $q->getHtml();
        $this->assertStringContainsString('<q', $html);
        $this->assertStringEndsWith('</q>', $html);
    }
}
