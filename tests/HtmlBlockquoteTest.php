<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBlockquote;

/**
 * class HtmlBlockquoteTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlBlockquoteTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockquote');
        $blockquote = new HtmlBlockquote($mock);
        $html = $blockquote->getHtml();
        $this->assertStringContainsString('<blockquote', $html);
        $this->assertStringContainsString('blockquote', $html);
        $this->assertStringEndsWith('</blockquote>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('blockquote');
        $blockquote = new HtmlBlockquote($mock);
        ob_start();
        $blockquote->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<blockquote', $output);
        $this->assertStringContainsString('blockquote', $output);
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
        $blockquote = new HtmlBlockquote($mock);
        $html = $blockquote->getHtml();
        $this->assertStringContainsString('<blockquote', $html);
        $this->assertStringEndsWith('</blockquote>', $html);
    }
}
