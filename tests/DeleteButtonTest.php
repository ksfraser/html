<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\DeleteButton;
use Ksfraser\HTML\Elements\HtmlString;

class DeleteButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new DeleteButton(new HtmlString('Delete'), 'id123');
        $this->assertStringContainsString('Delete', $btn->getHtml());
    }
    public function testSetConfirmation() {
        $btn = new DeleteButton(new HtmlString('Delete'), 'id123');
        $btn->setConfirmation('Are you sure?');
        $this->assertStringContainsString('confirm', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
