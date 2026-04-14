<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDfn;

/**
 * class HtmlDfTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlDfTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlDfTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDfn($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<df', $html);
        $this->assertStringContainsString('df', $html);
        $this->assertStringEndsWith('</df>', $html);
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
        $mock->method('getHtml')->willReturn('df');
        $df = new HtmlDfn($mock);
        ob_start();
        $df->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<df', $output);
        $this->assertStringContainsString('df', $output);
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
        $df = new HtmlDf($mock);
        $html = $df->getHtml();
        $this->assertStringContainsString('<df', $html);
        $this->assertStringEndsWith('</df>', $html);
    }
}
