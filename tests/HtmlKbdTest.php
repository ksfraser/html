<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlKbd;

/**
 * class HtmlKbdTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlKbdTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringContainsString('kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('kbd');
        $kbd = new HtmlKbd($mock);
        ob_start();
        $kbd->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<kbd', $output);
        $this->assertStringContainsString('kbd', $output);
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
        $kbd = new HtmlKbd($mock);
        $html = $kbd->getHtml();
        $this->assertStringContainsString('<kbd', $html);
        $this->assertStringEndsWith('</kbd>', $html);
    }
}
