<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlOption;

/**
 * class HtmlOptionTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlOptionTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $this->assertInstanceOf(HtmlOption::class, $option);
    }

/**
 * testToStringReturnsExpectedHtml
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public function testToStringReturnsExpectedHtml() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $html = (string)$option;
        $this->assertStringContainsString('<option', $html);
        $this->assertStringContainsString('label', $html);
        $this->assertStringContainsString('</option>', $html);
    }

    // Add more tests for all public methods and edge cases
}
