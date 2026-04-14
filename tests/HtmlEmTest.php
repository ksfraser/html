<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlEm;

/**
 * class HtmlEmTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlEmTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $em = new HtmlEm($mock);
        $this->assertInstanceOf(HtmlEm::class, $em);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringContainsString('emph', $html);
        $this->assertStringEndsWith('</em>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('emph');
        $em = new HtmlEm($mock);
        ob_start();
        $em->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<em', $output);
        $this->assertStringContainsString('emph', $output);
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
        $em = new HtmlEm($mock);
        $html = $em->getHtml();
        $this->assertStringContainsString('<em', $html);
        $this->assertStringEndsWith('</em>', $html);
    }
}
