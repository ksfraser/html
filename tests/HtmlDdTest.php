<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDd;

/**
 * class HtmlDdTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlDdTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dd');
        $dd = new HtmlDd($mock);
        $html = $dd->getHtml();
        $this->assertStringContainsString('<dd', $html);
        $this->assertStringContainsString('dd', $html);
        $this->assertStringEndsWith('</dd>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('dd');
        $dd = new HtmlDd($mock);
        ob_start();
        $dd->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<dd', $output);
        $this->assertStringContainsString('dd', $output);
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
        $dd = new HtmlDd($mock);
        $html = $dd->getHtml();
        $this->assertStringContainsString('<dd', $html);
        $this->assertStringEndsWith('</dd>', $html);
    }
}
