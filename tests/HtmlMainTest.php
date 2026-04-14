<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMain;

/**
 * class HtmlMainTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlMainTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('main');
        $main = new HtmlMain($mock);
        $html = $main->getHtml();
        $this->assertStringContainsString('<main', $html);
        $this->assertStringContainsString('main', $html);
        $this->assertStringEndsWith('</main>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('main');
        $main = new HtmlMain($mock);
        ob_start();
        $main->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<main', $output);
        $this->assertStringContainsString('main', $output);
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
        $main = new HtmlMain($mock);
        $html = $main->getHtml();
        $this->assertStringContainsString('<main', $html);
        $this->assertStringEndsWith('</main>', $html);
    }
}
