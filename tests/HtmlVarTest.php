<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlVar;

class HtmlVarTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('var');
        $var = new HtmlVar($mock);
        $html = $var->getHtml();
        $this->assertStringContainsString('<var', $html);
        $this->assertStringContainsString('var', $html);
        $this->assertStringEndsWith('</var>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('var');
        $var = new HtmlVar($mock);
        ob_start();
        $var->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<var', $output);
        $this->assertStringContainsString('var', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $var = new HtmlVar($mock);
        $html = $var->getHtml();
        $this->assertStringContainsString('<var', $html);
        $this->assertStringEndsWith('</var>', $html);
    }
}
