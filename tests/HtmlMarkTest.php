<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlMark;

/**
 * class HtmlMarkTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlMarkTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $this->assertInstanceOf(HtmlMark::class, $mark);
    }

/**
 * testTagIsMark
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public function testTagIsMark() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $this->assertEquals('mark', $mark->getTag());
    }

/**
 * testToStringReturnsExpectedHtml
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public function testToStringReturnsExpectedHtml() {
        $mark = new HtmlMark(new HtmlString('marked text'));
        $html = (string)$mark;
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringContainsString('marked text', $html);
        $this->assertStringContainsString('</mark>', $html);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringContainsString('mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('mark');
        $mark = new HtmlMark($mock);
        ob_start();
        $mark->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<mark', $output);
        $this->assertStringContainsString('mark', $output);
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
        $mark = new HtmlMark($mock);
        $html = $mark->getHtml();
        $this->assertStringContainsString('<mark', $html);
        $this->assertStringEndsWith('</mark>', $html);
    }
}
