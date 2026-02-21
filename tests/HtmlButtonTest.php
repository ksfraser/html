<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlButton;

class HtmlButtonTest extends TestCase {
    public function testInstance() {
        $button = new HtmlButton('Click me');
        $this->assertInstanceOf(HtmlButton::class, $button);
    }

    // Add more tests for all public methods and edge cases
}
