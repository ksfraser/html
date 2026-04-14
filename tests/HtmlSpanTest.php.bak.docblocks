<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSpan;

/**
 * class HtmlSpanTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSpanTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $span = new HtmlSpan(new \Ksfraser\HTML\Elements\HtmlString('content'));
        $this->assertInstanceOf(HtmlSpan::class, $span);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('span');
        $span = new HtmlSpan($mock);
        $html = $span->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringContainsString('span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('span');
        $span = new HtmlSpan($mock);
        ob_start();
        $span->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<span', $output);
        $this->assertStringContainsString('span', $output);
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
        $span = new HtmlSpan($mock);
        $html = $span->getHtml();
        $this->assertStringContainsString('<span', $html);
        $this->assertStringEndsWith('</span>', $html);
    }
}
