<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH6;

/**
 * class HtmlH6Test
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlH6Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h6');
        $h6 = new HtmlH6($mock);
        $html = $h6->getHtml();
        $this->assertStringContainsString('<h6', $html);
        $this->assertStringContainsString('h6', $html);
        $this->assertStringEndsWith('</h6>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h6');
        $h6 = new HtmlH6($mock);
        ob_start();
        $h6->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h6', $output);
        $this->assertStringContainsString('h6', $output);
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
        $h6 = new HtmlH6($mock);
        $html = $h6->getHtml();
        $this->assertStringContainsString('<h6', $html);
        $this->assertStringEndsWith('</h6>', $html);
    }
}
