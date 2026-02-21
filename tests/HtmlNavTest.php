<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlNav;

class HtmlNavTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringContainsString('nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        ob_start();
        $nav->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<nav', $output);
        $this->assertStringContainsString('nav', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
    }
}
