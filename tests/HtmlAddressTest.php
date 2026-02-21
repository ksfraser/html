<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAddress;

class HtmlAddressTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('address');
        $address = new HtmlAddress($mock);
        $html = $address->getHtml();
        $this->assertStringContainsString('<address', $html);
        $this->assertStringContainsString('address', $html);
        $this->assertStringEndsWith('</address>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('address');
        $address = new HtmlAddress($mock);
        ob_start();
        $address->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<address', $output);
        $this->assertStringContainsString('address', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $address = new HtmlAddress($mock);
        $html = $address->getHtml();
        $this->assertStringContainsString('<address', $html);
        $this->assertStringEndsWith('</address>', $html);
    }
}
