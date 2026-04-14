<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMeter;

/**
 * class HtmlMeterTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlMeterTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlMeterTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('meter');
        $meter = new HtmlMeter($mock);
        $html = $meter->getHtml();
        $this->assertStringContainsString('<meter', $html);
        $this->assertStringContainsString('meter', $html);
        $this->assertStringEndsWith('</meter>', $html);
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
        $mock->method('getHtml')->willReturn('meter');
        $meter = new HtmlMeter($mock);
        ob_start();
        $meter->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<meter', $output);
        $this->assertStringContainsString('meter', $output);
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
        $meter = new HtmlMeter($mock);
        $html = $meter->getHtml();
        $this->assertStringContainsString('<meter', $html);
        $this->assertStringEndsWith('</meter>', $html);
    }
}
