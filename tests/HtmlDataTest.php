<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlData;

/**
 * class HtmlDataTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlDataTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('data');
        $data = new HtmlData($mock);
        $html = $data->getHtml();
        $this->assertStringContainsString('<data', $html);
        $this->assertStringContainsString('data', $html);
        $this->assertStringEndsWith('</data>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('data');
        $data = new HtmlData($mock);
        ob_start();
        $data->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<data', $output);
        $this->assertStringContainsString('data', $output);
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
        $data = new HtmlData($mock);
        $html = $data->getHtml();
        $this->assertStringContainsString('<data', $html);
        $this->assertStringEndsWith('</data>', $html);
    }
}
