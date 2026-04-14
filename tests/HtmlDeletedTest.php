<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlDeleted;

/**
 * class HtmlDeletedTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlDeletedTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $del = new HtmlDeleted($mock);
        $this->assertInstanceOf(HtmlDeleted::class, $del);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('deleted');
        $del = new HtmlDeleted($mock);
        $html = $del->getHtml();
        $this->assertStringContainsString('<del', $html);
        $this->assertStringContainsString('deleted', $html);
        $this->assertStringEndsWith('</del>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('deleted');
        $del = new HtmlDeleted($mock);
        ob_start();
        $del->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<del', $output);
        $this->assertStringContainsString('deleted', $output);
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
        $del = new HtmlDeleted($mock);
        $html = $del->getHtml();
        $this->assertStringContainsString('<del', $html);
        $this->assertStringEndsWith('</del>', $html);
    }
}
