<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlP;

/**
 * class HtmlPTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlPTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $p = new HtmlP(new \Ksfraser\HTML\Elements\HtmlString('paragraph text'));
        $this->assertInstanceOf(HtmlP::class, $p);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringContainsString('p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('p');
        $p = new HtmlP($mock);
        ob_start();
        $p->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<p', $output);
        $this->assertStringContainsString('p', $output);
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
        $p = new HtmlP($mock);
        $html = $p->getHtml();
        $this->assertStringContainsString('<p', $html);
        $this->assertStringEndsWith('</p>', $html);
    }
}
