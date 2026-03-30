<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\CancelButton;
use Ksfraser\HTML\Elements\HtmlString;

class CancelButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new CancelButton();
        $this->assertStringContainsString('Cancel', $btn->getHtml());
    }
    public function testSetGoBack() {
        $btn = new CancelButton();
        $btn->setGoBack();
        $this->assertStringContainsString('window.history.back', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
