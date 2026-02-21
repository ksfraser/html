<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlUl;

class HtmlUlTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ul');
        $ul = new HtmlUl($mock);
        $html = $ul->getHtml();
        $this->assertStringContainsString('<ul', $html);
        $this->assertStringContainsString('ul', $html);
        $this->assertStringEndsWith('</ul>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ul');
        $ul = new HtmlUl($mock);
        ob_start();
        $ul->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ul', $output);
        $this->assertStringContainsString('ul', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ul = new HtmlUl($mock);
        $html = $ul->getHtml();
        $this->assertStringContainsString('<ul', $html);
        $this->assertStringEndsWith('</ul>', $html);
    }
}
