<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH4;

/**
 * class HtmlH4Test
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlH4Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h4');
        $h4 = new HtmlH4($mock);
        $html = $h4->getHtml();
        $this->assertStringContainsString('<h4', $html);
        $this->assertStringContainsString('h4', $html);
        $this->assertStringEndsWith('</h4>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h4');
        $h4 = new HtmlH4($mock);
        ob_start();
        $h4->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h4', $output);
        $this->assertStringContainsString('h4', $output);
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
        $h4 = new HtmlH4($mock);
        $html = $h4->getHtml();
        $this->assertStringContainsString('<h4', $html);
        $this->assertStringEndsWith('</h4>', $html);
    }
}
