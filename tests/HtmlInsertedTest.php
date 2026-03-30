<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlInserted;

class HtmlInsertedTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $ins = new HtmlInserted($mock);
        $this->assertInstanceOf(HtmlInserted::class, $ins);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ins');
        $ins = new HtmlInserted($mock);
        $html = $ins->getHtml();
        $this->assertStringContainsString('<ins', $html);
        $this->assertStringContainsString('ins', $html);
        $this->assertStringEndsWith('</ins>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ins');
        $ins = new HtmlInserted($mock);
        ob_start();
        $ins->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ins', $output);
        $this->assertStringContainsString('ins', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ins = new HtmlInserted($mock);
        $html = $ins->getHtml();
        $this->assertStringContainsString('<ins', $html);
        $this->assertStringEndsWith('</ins>', $html);
    }
}
