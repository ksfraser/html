<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH2;

/**
 * class HtmlH2Test
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlH2Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringContainsString('h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        ob_start();
        $h2->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h2', $output);
        $this->assertStringContainsString('h2', $output);
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
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
    }
}
