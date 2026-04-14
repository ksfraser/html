<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlB;

/**
 * class HtmlBTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlBTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlBTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testInstance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $b = new HtmlB($mock);
        $this->assertInstanceOf(HtmlB::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $b);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
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
        $mock->method('getHtml')->willReturn('bold');
        $b = new HtmlB($mock);
        $html = $b->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringContainsString('bold', $html);
        $this->assertStringEndsWith('</b>', $html);
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
        $mock->method('getHtml')->willReturn('bold');
        $b = new HtmlB($mock);
        ob_start();
        $b->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<b', $output);
        $this->assertStringContainsString('bold', $output);
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
        $b = new HtmlB($mock);
        $html = $b->getHtml();
        $this->assertStringContainsString('<b', $html);
        $this->assertStringEndsWith('</b>', $html);
    }
}
