<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlMenu;

class HtmlMenuTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('menu');
        $menu = new HtmlMenu($mock);
        $html = $menu->getHtml();
        $this->assertStringContainsString('<menu', $html);
        $this->assertStringContainsString('menu', $html);
        $this->assertStringEndsWith('</menu>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('menu');
        $menu = new HtmlMenu($mock);
        ob_start();
        $menu->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<menu', $output);
        $this->assertStringContainsString('menu', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $menu = new HtmlMenu($mock);
        $html = $menu->getHtml();
        $this->assertStringContainsString('<menu', $html);
        $this->assertStringEndsWith('</menu>', $html);
    }
}
