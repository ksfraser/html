<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlOption;

/**
 * class HtmlOptionTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlOptionTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlOptionTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testInstance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
function testInstance() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $this->assertInstanceOf(HtmlOption::/**
 * testToStringReturnsExpectedHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $option);
    }

/**
 * testToStringReturnsExpectedHtml
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testToStringReturnsExpectedHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
/**
 * testToStringReturnsExpectedHtml
 *
 * @return void
 */
function testToStringReturnsExpectedHtml() {
        $option = new HtmlOption(new HtmlString('value'), new HtmlString('label'));
        $html = (string)$option;
        $this->assertStringContainsString('<option', $html);
        $this->assertStringContainsString('label', $html);
        $this->assertStringContainsString('</option>', $html);
    }

    // Add more tests for all public methods and edge cases
}
