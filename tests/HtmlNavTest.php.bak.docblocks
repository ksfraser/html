<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlNav;

/**
 * class HtmlNavTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlNavTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringContainsString('nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('nav');
        $nav = new HtmlNav($mock);
        ob_start();
        $nav->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<nav', $output);
        $this->assertStringContainsString('nav', $output);
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
        $nav = new HtmlNav($mock);
        $html = $nav->getHtml();
        $this->assertStringContainsString('<nav', $html);
        $this->assertStringEndsWith('</nav>', $html);
    }
}
