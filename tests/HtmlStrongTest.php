<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlStrong;

/**
 * class HtmlStrongTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlStrongTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $strong = new HtmlStrong($mock);
        $this->assertInstanceOf(HtmlStrong::class, $strong);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('strong');
        $strong = new HtmlStrong($mock);
        $html = $strong->getHtml();
        $this->assertStringContainsString('<strong', $html);
        $this->assertStringContainsString('strong', $html);
        $this->assertStringEndsWith('</strong>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('strong');
        $strong = new HtmlStrong($mock);
        ob_start();
        $strong->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<strong', $output);
        $this->assertStringContainsString('strong', $output);
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
        $strong = new HtmlStrong($mock);
        $html = $strong->getHtml();
        $this->assertStringContainsString('<strong', $html);
        $this->assertStringEndsWith('</strong>', $html);
    }
}
