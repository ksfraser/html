<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFigure;

/**
 * class HtmlFigureTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlFigureTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlFigureTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
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
    public /**
 * testToHtmlOutputsHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
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
    public /**
 * testEdgeCasesEmptyContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $figure = new HtmlFigure($mock);
        $html = $figure->getHtml();
        $this->assertStringContainsString('<figure', $html);
        $this->assertStringEndsWith('</figure>', $html);
    }
}
