<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\CloseButton;
use Ksfraser\HTML\Elements\HtmlString;

class CloseButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new CloseButton();
        $this->assertStringContainsString('Close', $btn->getHtml());
    }
    public function testAddClass() {
        $btn = new CloseButton();
        $btn->addClass('extra-class');
        $this->assertStringContainsString('extra-class', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
