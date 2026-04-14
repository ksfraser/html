<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH3;

/**
 * class HtmlH3Test
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlH3Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h3');
        $h3 = new HtmlH3($mock);
        $html = $h3->getHtml();
        $this->assertStringContainsString('<h3', $html);
        $this->assertStringContainsString('h3', $html);
        $this->assertStringEndsWith('</h3>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h3');
        $h3 = new HtmlH3($mock);
        ob_start();
        $h3->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h3', $output);
        $this->assertStringContainsString('h3', $output);
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
        $h3 = new HtmlH3($mock);
        $html = $h3->getHtml();
        $this->assertStringContainsString('<h3', $html);
        $this->assertStringEndsWith('</h3>', $html);
    }
}
