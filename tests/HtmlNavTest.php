<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlNav;

/**
 * class HtmlNavTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlNavTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlNavTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringContainsString('nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
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
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        ob_start();
        $nav->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<nav', $output);
        $this->assertStringContainsString('nav', $output);
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
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
    }
}
