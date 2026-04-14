<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFigure;

/**
 * class HtmlFigureTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFigureTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('figure');
        $figure = new HtmlFigure($mock);
        $html = $figure->getHtml();
        $this->assertStringContainsString('<figure', $html);
        $this->assertStringContainsString('figure', $html);
        $this->assertStringEndsWith('</figure>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
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

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $figure = new HtmlFigure($mock);
        $html = $figure->getHtml();
        $this->assertStringContainsString('<figure', $html);
        $this->assertStringEndsWith('</figure>', $html);
    }
}
