<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlDeleted;

class HtmlDeletedTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $del = new HtmlDeleted($mock);
        $this->assertInstanceOf(HtmlDeleted::class, $del);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('deleted');
        $del = new HtmlDeleted($mock);
        $html = $del->getHtml();
        $this->assertStringContainsString('<del', $html);
        $this->assertStringContainsString('deleted', $html);
        $this->assertStringEndsWith('</del>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('deleted');
        $del = new HtmlDeleted($mock);
        ob_start();
        $del->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<del', $output);
        $this->assertStringContainsString('deleted', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $del = new HtmlDeleted($mock);
        $html = $del->getHtml();
        $this->assertStringContainsString('<del', $html);
        $this->assertStringEndsWith('</del>', $html);
    }
}
