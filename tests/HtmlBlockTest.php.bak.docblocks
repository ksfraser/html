<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBlock;

/**
 * class HtmlBlockTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlBlockTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('block');
        $block = new HtmlBlock($mock);
        $html = $block->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringContainsString('block', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('block');
        $block = new HtmlBlock($mock);
        ob_start();
        $block->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div', $output);
        $this->assertStringContainsString('block', $output);
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
        $block = new HtmlBlock($mock);
        $html = $block->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }
}
