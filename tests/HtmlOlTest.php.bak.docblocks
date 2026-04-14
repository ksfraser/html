<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOl;

/**
 * class HtmlOlTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlOlTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $ol = new HtmlOl(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOl::class, $ol);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringContainsString('ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        ob_start();
        $ol->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ol', $output);
        $this->assertStringContainsString('ol', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }
}
