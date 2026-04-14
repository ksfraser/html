<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMenu;

/**
 * class HtmlMenuTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlMenuTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlMenuTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('menu');
        $menu = new HtmlMenu($mock);
        $html = $menu->getHtml();
        $this->assertStringContainsString('<menu', $html);
        $this->assertStringContainsString('menu', $html);
        $this->assertStringEndsWith('</menu>', $html);
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
        $mock->method('getHtml')->willReturn('menu');
        $menu = new HtmlMenu($mock);
        ob_start();
        $menu->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<menu', $output);
        $this->assertStringContainsString('menu', $output);
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
        $menu = new HtmlMenu($mock);
        $html = $menu->getHtml();
        $this->assertStringContainsString('<menu', $html);
        $this->assertStringEndsWith('</menu>', $html);
    }
}
