<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlHeader;

/**
 * class HtmlHeaderTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlHeaderTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlHeaderTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('header');
        $header = new HtmlHeader($mock);
        $html = $header->getHtml();
        $this->assertStringContainsString('<header', $html);
        $this->assertStringContainsString('header', $html);
        $this->assertStringEndsWith('</header>', $html);
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
        $mock->method('getHtml')->willReturn('header');
        $header = new HtmlHeader($mock);
        ob_start();
        $header->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<header', $output);
        $this->assertStringContainsString('header', $output);
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
        $header = new HtmlHeader($mock);
        $html = $header->getHtml();
        $this->assertStringContainsString('<header', $html);
        $this->assertStringEndsWith('</header>', $html);
    }
}
