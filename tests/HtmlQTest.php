<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlQ;

/**
 * class HtmlQTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlQTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('q');
        $q = new HtmlQ($mock);
        $html = $q->getHtml();
        $this->assertStringContainsString('<q', $html);
        $this->assertStringContainsString('q', $html);
        $this->assertStringEndsWith('</q>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('q');
        $q = new HtmlQ($mock);
        ob_start();
        $q->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<q', $output);
        $this->assertStringContainsString('q', $output);
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
        $q = new HtmlQ($mock);
        $html = $q->getHtml();
        $this->assertStringContainsString('<q', $html);
        $this->assertStringEndsWith('</q>', $html);
    }
}
