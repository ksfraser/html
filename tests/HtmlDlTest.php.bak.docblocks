<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDl;

/**
 * class HtmlDlTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlDlTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dl');
        $dl = new HtmlDl($mock);
        $html = $dl->getHtml();
        $this->assertStringContainsString('<dl', $html);
        $this->assertStringContainsString('dl', $html);
        $this->assertStringEndsWith('</dl>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dl');
        $dl = new HtmlDl($mock);
        ob_start();
        $dl->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dl', $output);
        $this->assertStringContainsString('dl', $output);
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
        $dl = new HtmlDl($mock);
        $html = $dl->getHtml();
        $this->assertStringContainsString('<dl', $html);
        $this->assertStringEndsWith('</dl>', $html);
    }
}
