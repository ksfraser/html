<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSection;

/**
 * class HtmlSectionTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSectionTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringContainsString('section', $html);
        $this->assertStringEndsWith('</section>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        ob_start();
        $section->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<section', $output);
        $this->assertStringContainsString('section', $output);
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
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringEndsWith('</section>', $html);
    }
}
