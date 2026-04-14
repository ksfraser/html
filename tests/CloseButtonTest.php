<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\CloseButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class CloseButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class CloseButtonTest extends TestCase {
/**
 * testDefaultLabel
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testDefaultLabel() {
        $btn = new CloseButton();
        $this->assertStringContainsString('Close', $btn->getHtml());
    }
/**
 * testAddClass
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public function testAddClass() {
        $btn = new CloseButton();
        $btn->addClass('extra-class');
        $this->assertStringContainsString('extra-class', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
