<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDt;

/**
 * class HtmlDtTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlDtTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlDtTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('dt');
        $dt = new HtmlDt($mock);
        $html = $dt->getHtml();
        $this->assertStringContainsString('<dt', $html);
        $this->assertStringContainsString('dt', $html);
        $this->assertStringEndsWith('</dt>', $html);
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
        $mock->method('getHtml')->willReturn('dt');
        $dt = new HtmlDt($mock);
        ob_start();
        $dt->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dt', $output);
        $this->assertStringContainsString('dt', $output);
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
        $dt = new HtmlDt($mock);
        $html = $dt->getHtml();
        $this->assertStringContainsString('<dt', $html);
        $this->assertStringEndsWith('</dt>', $html);
    }
}
