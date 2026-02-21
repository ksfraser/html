<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Button\HtmlButton;

class HtmlButtonTest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $button = new HtmlButton($mock);
        $this->assertInstanceOf(HtmlButton::class, $button);
    }

    // Add more tests for all public methods and edge cases
}
