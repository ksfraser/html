<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSmall;

/**
 * class HtmlSmallTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSmallTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $small = new HtmlSmall(new \Ksfraser\HTML\Elements\HtmlString('small text'));
        $this->assertInstanceOf(HtmlSmall::class, $small);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringContainsString('small', $html);
        $this->assertStringEndsWith('</small>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        ob_start();
        $small->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<small', $output);
        $this->assertStringContainsString('small', $output);
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
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringEndsWith('</small>', $html);
    }
}
