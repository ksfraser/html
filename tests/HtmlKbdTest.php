<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlKbd;

class HtmlKbdTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringContainsString('kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        ob_start();
        $kbd->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<kbd', $output);
        $this->assertStringContainsString('kbd', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
    }
}
