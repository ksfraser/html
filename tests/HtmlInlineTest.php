<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlInline;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlInlineTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlInlineTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('inline');
        $inline = new HtmlInline($mock);
        $html = $inline->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('inline', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('inline');
        $inline = new HtmlInline($mock);
        ob_start();
        $inline->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('inline', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $inline = new HtmlInline($mock);
        $html = $inline->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
