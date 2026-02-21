<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\ActionButton;
use Ksfraser\HTML\HtmlElementInterface;

class DummyActionButton extends ActionButton {
    public function __construct(HtmlElementInterface $label = null) {
        parent::__construct('dummy', $label);
    }
    protected function setupActionButton() {
        // No-op for test
    }
}

class ActionButtonTest extends TestCase {
    public function testCanInstantiate() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $btn = new DummyActionButton($mock);
        $this->assertInstanceOf(ActionButton::class, $btn);
    }
    // Add more tests for public methods and edge cases
}
