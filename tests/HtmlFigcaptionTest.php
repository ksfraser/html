<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFigcaption;

/**
 * class HtmlFigcaptionTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlFigcaptionTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlFigcaptionTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('figcaption');
        $figcaption = new HtmlFigcaption($mock);
        $html = $figcaption->getHtml();
        $this->assertStringContainsString('<figcaption', $html);
        $this->assertStringContainsString('figcaption', $html);
        $this->assertStringEndsWith('</figcaption>', $html);
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
        $mock->method('getHtml')->willReturn('figcaption');
        $figcaption = new HtmlFigcaption($mock);
        ob_start();
        $figcaption->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<figcaption', $output);
        $this->assertStringContainsString('figcaption', $output);
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
        $figcaption = new HtmlFigcaption($mock);
        $html = $figcaption->getHtml();
        $this->assertStringContainsString('<figcaption', $html);
        $this->assertStringEndsWith('</figcaption>', $html);
    }
}
