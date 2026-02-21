<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\EditButton;
use Ksfraser\HTML\Elements\HtmlString;

class EditButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new EditButton(new HtmlString('Edit'), 'id123');
        $this->assertStringContainsString('Edit', $btn->getHtml());
    }
    public function testSetOnclickFunction() {
        $btn = new EditButton(new HtmlString('Edit'), 'id123', 'editFn()');
        $this->assertStringContainsString('onclick', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
