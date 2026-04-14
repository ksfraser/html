<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDiv;

/**
 * class HtmlDivTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlDivTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $div = new HtmlDiv($mock);
        $this->assertInstanceOf(HtmlDiv::class, $div);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('div');
        $div = new HtmlDiv($mock);
        $html = $div->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringContainsString('div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('div');
        $div = new HtmlDiv($mock);
        ob_start();
        $div->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div', $output);
        $this->assertStringContainsString('div', $output);
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
        $div = new HtmlDiv($mock);
        $html = $div->getHtml();
        $this->assertStringContainsString('<div', $html);
        $this->assertStringEndsWith('</div>', $html);
    }
}
