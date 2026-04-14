<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * class HtmlNameValueTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlNameValueTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $nv = new HtmlNameValue('name', 'value');
        $this->assertInstanceOf(HtmlNameValue::class, $nv);
    }

    // Add more tests for all public methods and edge cases
}
