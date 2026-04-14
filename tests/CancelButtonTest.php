<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\CancelButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class CancelButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class CancelButtonTest extends TestCase {
/**
 * testDefaultLabel
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testDefaultLabel() {
        $btn = new CancelButton();
        $this->assertStringContainsString('Cancel', $btn->getHtml());
    }
/**
 * testSetGoBack
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public function testSetGoBack() {
        $btn = new CancelButton();
        $btn->setGoBack();
        $this->assertStringContainsString('window.history.back', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
