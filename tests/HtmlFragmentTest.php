<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlFragment;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlFragmentTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlFragmentTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlFragmentTest extends TestCase {
/**
 * testImplementsInterface
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testImplementsInterface
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testImplementsInterface() {
        $fragment = new HtmlFragment();
        $this->assertInstanceOf(HtmlElementInterface::/**
 * testAddChildReturnsSelf
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $fragment);
    }

/**
 * testAddChildReturnsSelf
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testAddChildReturnsSelf
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testAddChildReturnsSelf() {
        $fragment = new HtmlFragment();
        $child = $this->getMockBuilder(HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $result = $fragment->addChild($child);
        $this->assertSame($fragment, $result);
    }

/**
 * testGetHtmlWithChild
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetHtmlWithChild
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetHtmlWithChild() {
        $fragment = new HtmlFragment();
        $mock = $this->getMockBuilder(HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('<span>child</span>');
        $fragment->addChild($mock);
        $html = $fragment->getHtml();
        $this->assertStringContainsString('<span>child</span>', $html);
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
        $fragment = new HtmlFragment();
        $mock = $this->getMockBuilder(HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('<div>frag</div>');
        $fragment->addChild($mock);
        ob_start();
        $fragment->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div>frag</div>', $output);
    }

/**
 * testEdgeCasesEmptyFragment
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testEdgeCasesEmptyFragment
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEdgeCasesEmptyFragment() {
        $fragment = new HtmlFragment();
        $html = $fragment->getHtml();
        $this->assertEquals('', $html);
    }
}
