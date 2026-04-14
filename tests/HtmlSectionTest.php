<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSection;

/**
 * class HtmlSectionTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlSectionTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlSectionTest extends TestCase {
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
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringContainsString('section', $html);
        $this->assertStringEndsWith('</section>', $html);
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
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        ob_start();
        $section->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<section', $output);
        $this->assertStringContainsString('section', $output);
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
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringEndsWith('</section>', $html);
    }
}
