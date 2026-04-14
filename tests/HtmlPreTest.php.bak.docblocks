<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPre;

/**
 * class HtmlPreTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlPreTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('pre');
        $pre = new HtmlPre($mock);
        $html = $pre->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringContainsString('pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('pre');
        $pre = new HtmlPre($mock);
        ob_start();
        $pre->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<pre', $output);
        $this->assertStringContainsString('pre', $output);
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
        $pre = new HtmlPre($mock);
        $html = $pre->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }
}
