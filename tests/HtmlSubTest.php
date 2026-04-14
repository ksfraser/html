<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSub;

/**
 * class HtmlSubTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSubTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $sub = new HtmlSub($mock);
        $this->assertInstanceOf(HtmlSub::class, $sub);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sub');
        $sub = new HtmlSub($mock);
        $html = $sub->getHtml();
        $this->assertStringContainsString('<sub', $html);
        $this->assertStringContainsString('sub', $html);
        $this->assertStringEndsWith('</sub>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('sub');
        $sub = new HtmlSub($mock);
        ob_start();
        $sub->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<sub', $output);
        $this->assertStringContainsString('sub', $output);
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
        $sub = new HtmlSub($mock);
        $html = $sub->getHtml();
        $this->assertStringContainsString('<sub', $html);
        $this->assertStringEndsWith('</sub>', $html);
    }
}
