<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlInserted;

/**
 * class HtmlInsertedTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlInsertedTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $ins = new HtmlInserted($mock);
        $this->assertInstanceOf(HtmlInserted::class, $ins);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ins');
        $ins = new HtmlInserted($mock);
        $html = $ins->getHtml();
        $this->assertStringContainsString('<ins', $html);
        $this->assertStringContainsString('ins', $html);
        $this->assertStringEndsWith('</ins>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ins');
        $ins = new HtmlInserted($mock);
        ob_start();
        $ins->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ins', $output);
        $this->assertStringContainsString('ins', $output);
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
        $ins = new HtmlInserted($mock);
        $html = $ins->getHtml();
        $this->assertStringContainsString('<ins', $html);
        $this->assertStringEndsWith('</ins>', $html);
    }
}
