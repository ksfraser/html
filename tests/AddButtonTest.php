<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\AddButton;
use Ksfraser\HTML\Elements\HtmlString;

class AddButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new AddButton(new HtmlString('Add'));
        $this->assertStringContainsString('Add', $btn->getHtml());
    }
    public function testCssClass() {
        $btn = new AddButton(new HtmlString('Add'));
        $this->assertStringContainsString('btn-success', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
