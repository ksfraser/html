<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlBr;

/**
 * class HtmlBrTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlBrTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $br = new HtmlBr($mock);
        $html = $br->getHtml();
        $this->assertStringContainsString('<br', $html);
        $this->assertStringEndsWith('/>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $br = new HtmlBr($mock);
        ob_start();
        $br->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<br', $output);
        $this->assertStringEndsWith('/>', $output);
    }
}
