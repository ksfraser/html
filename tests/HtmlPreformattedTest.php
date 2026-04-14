<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPreformatted;

/**
 * class HtmlPreformattedTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlPreformattedTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlPreformattedTest extends TestCase {
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
        $pre = new HtmlPreformatted(new \Ksfraser\HTML\Elements\HtmlString('preformatted text'));
        $this->assertInstanceOf(HtmlPreformatted::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $pre);
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
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringContainsString('preformatted', $html);
        $this->assertStringEndsWith('</pre>', $html);
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
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        ob_start();
        $preformatted->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<pre', $output);
        $this->assertStringContainsString('preformatted', $output);
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
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }
}
