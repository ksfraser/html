<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFooter;

/**
 * class HtmlFooterTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFooterTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('footer');
        $footer = new HtmlFooter($mock);
        $html = $footer->getHtml();
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringContainsString('footer', $html);
        $this->assertStringEndsWith('</footer>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('footer');
        $footer = new HtmlFooter($mock);
        ob_start();
        $footer->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<footer', $output);
        $this->assertStringContainsString('footer', $output);
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
        $footer = new HtmlFooter($mock);
        $html = $footer->getHtml();
        $this->assertStringContainsString('<footer', $html);
        $this->assertStringEndsWith('</footer>', $html);
    }
}
