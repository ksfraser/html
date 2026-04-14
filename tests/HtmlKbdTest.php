<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlKbd;

/**
 * class HtmlKbdTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlKbdTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlKbdTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringContainsString('kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
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
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        ob_start();
        $kbd->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<kbd', $output);
        $this->assertStringContainsString('kbd', $output);
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
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
    }
}
