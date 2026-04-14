<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlProgress;

/**
 * class HtmlProgressTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlProgressTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('progress');
        $progress = new HtmlProgress($mock);
        $html = $progress->getHtml();
        $this->assertStringContainsString('<progress', $html);
        $this->assertStringContainsString('progress', $html);
        $this->assertStringEndsWith('</progress>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('progress');
        $progress = new HtmlProgress($mock);
        ob_start();
        $progress->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<progress', $output);
        $this->assertStringContainsString('progress', $output);
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
        $progress = new HtmlProgress($mock);
        $html = $progress->getHtml();
        $this->assertStringContainsString('<progress', $html);
        $this->assertStringEndsWith('</progress>', $html);
    }
}
