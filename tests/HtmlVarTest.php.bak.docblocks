<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlVar;

/**
 * class HtmlVarTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlVarTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('var');
        $var = new HtmlVar($mock);
        $html = $var->getHtml();
        $this->assertStringContainsString('<var', $html);
        $this->assertStringContainsString('var', $html);
        $this->assertStringEndsWith('</var>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('var');
        $var = new HtmlVar($mock);
        ob_start();
        $var->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<var', $output);
        $this->assertStringContainsString('var', $output);
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
        $var = new HtmlVar($mock);
        $html = $var->getHtml();
        $this->assertStringContainsString('<var', $html);
        $this->assertStringEndsWith('</var>', $html);
    }
}
