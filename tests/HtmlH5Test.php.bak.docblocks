<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH5;

/**
 * class HtmlH5Test
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlH5Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h5');
        $h5 = new HtmlH5($mock);
        $html = $h5->getHtml();
        $this->assertStringContainsString('<h5', $html);
        $this->assertStringContainsString('h5', $html);
        $this->assertStringEndsWith('</h5>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('h5');
        $h5 = new HtmlH5($mock);
        ob_start();
        $h5->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h5', $output);
        $this->assertStringContainsString('h5', $output);
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
        $h5 = new HtmlH5($mock);
        $html = $h5->getHtml();
        $this->assertStringContainsString('<h5', $html);
        $this->assertStringEndsWith('</h5>', $html);
    }
}
