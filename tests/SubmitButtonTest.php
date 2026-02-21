<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\SubmitButton;
use Ksfraser\HTML\Elements\HtmlString;

class SubmitButtonTest extends TestCase {
    public function testDefaultLabel() {
        $btn = new SubmitButton();
        $this->assertStringContainsString('Submit', $btn->getHtml());
    }
    public function testTypeIsSubmit() {
        $btn = new SubmitButton();
        $this->assertStringContainsString('type="submit"', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
