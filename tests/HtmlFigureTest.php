<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFigure;

class HtmlFigureTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('figure');
        $figure = new HtmlFigure($mock);
        $html = $figure->getHtml();
        $this->assertStringContainsString('<figure', $html);
        $this->assertStringContainsString('figure', $html);
        $this->assertStringEndsWith('</figure>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('figure');
        $figure = new HtmlFigure($mock);
        ob_start();
        $figure->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<figure', $output);
        $this->assertStringContainsString('figure', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $figure = new HtmlFigure($mock);
        $html = $figure->getHtml();
        $this->assertStringContainsString('<figure', $html);
        $this->assertStringEndsWith('</figure>', $html);
    }
}
