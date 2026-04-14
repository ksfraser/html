<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSamp;

/**
 * class HtmlSampTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSampTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('samp');
        $samp = new HtmlSamp($mock);
        $html = $samp->getHtml();
        $this->assertStringContainsString('<samp', $html);
        $this->assertStringContainsString('samp', $html);
        $this->assertStringEndsWith('</samp>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('samp');
        $samp = new HtmlSamp($mock);
        ob_start();
        $samp->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<samp', $output);
        $this->assertStringContainsString('samp', $output);
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
        $samp = new HtmlSamp($mock);
        $html = $samp->getHtml();
        $this->assertStringContainsString('<samp', $html);
        $this->assertStringEndsWith('</samp>', $html);
    }
}
