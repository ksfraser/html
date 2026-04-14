<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlP;

/**
 * class HtmlPTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlPTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlPTest extends TestCase {
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
        $p = new HtmlP(new \Ksfraser\HTML\Elements\HtmlString('paragraph text'));
        $this->assertInstanceOf(HtmlP::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $p);
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
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringContainsString('p', $html);
        $this->assertStringEndsWith('</p>', $html);
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
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        ob_start();
        $p->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('p', $output);
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
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }
}
