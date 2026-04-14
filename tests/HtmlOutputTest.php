<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOutput;

/**
 * class HtmlOutputTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlOutputTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('output');
        $output = new HtmlOutput($mock);
        $html = $output->getHtml();
        $this->assertStringContainsString('<output', $html);
        $this->assertStringContainsString('output', $html);
        $this->assertStringEndsWith('</output>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('output');
        $output = new HtmlOutput($mock);
        ob_start();
        $output->toHtml();
        $out = ob_get_clean();
        $this->assertStringContainsString('<output', $out);
        $this->assertStringContainsString('output', $out);
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
        $output = new HtmlOutput($mock);
        $html = $output->getHtml();
        $this->assertStringContainsString('<output', $html);
        $this->assertStringEndsWith('</output>', $html);
    }
}
