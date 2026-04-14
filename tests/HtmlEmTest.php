<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlEm;

/**
 * class HtmlEmTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlEmTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlEmTest extends TestCase {
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
        $em = new HtmlEm($mock);
        $this->assertInstanceOf(HtmlEm::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $em);
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
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringContainsString('emph', $html);
        $this->assertStringEndsWith('</em>', $html);
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
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        ob_start();
        $em->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<em', $output);
        $this->assertStringContainsString('emph', $output);
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
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringEndsWith('</em>', $html);
    }
}
