<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPreformatted;

/**
 * class HtmlPreformattedTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlPreformattedTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $pre = new HtmlPreformatted(new \Ksfraser\HTML\Elements\HtmlString('preformatted text'));
        $this->assertInstanceOf(HtmlPreformatted::class, $pre);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringContainsString('preformatted', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        ob_start();
        $preformatted->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<pre', $output);
        $this->assertStringContainsString('preformatted', $output);
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
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }
}
