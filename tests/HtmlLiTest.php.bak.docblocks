<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlLi;

/**
 * class HtmlLiTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlLiTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $li = new HtmlLi('item');
        $this->assertInstanceOf(HtmlLi::class, $li);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('li');
        $li = new HtmlLi($mock);
        $html = $li->getHtml();
        $this->assertStringContainsString('<li', $html);
        $this->assertStringContainsString('li', $html);
        $this->assertStringEndsWith('</li>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('li');
        $li = new HtmlLi($mock);
        ob_start();
        $li->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<li', $output);
        $this->assertStringContainsString('li', $output);
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
        $li = new HtmlLi($mock);
        $html = $li->getHtml();
        $this->assertStringContainsString('<li', $html);
        $this->assertStringEndsWith('</li>', $html);
    }
}
