<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlEm;

class HtmlEmTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $em = new HtmlEm($mock);
        $this->assertInstanceOf(HtmlEm::class, $em);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringContainsString('emph', $html);
        $this->assertStringEndsWith('</em>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        ob_start();
        $em->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<em', $output);
        $this->assertStringContainsString('emph', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringEndsWith('</em>', $html);
    }
}
