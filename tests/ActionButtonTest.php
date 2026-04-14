<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\ActionButton;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class DummyActionButton
 *
 * @since 1.0.4 2026-02-21
 */
class DummyActionButton extends ActionButton {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param HtmlElementInterface $label
 * @return void
 */
    public function __construct(HtmlElementInterface $label = null) {
        parent::__construct('dummy', $label);
    }
/**
 * setupActionButton
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    protected function setupActionButton() {
        // No-op for test
    }
}

/**
 * class ActionButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class ActionButtonTest extends TestCase {
/**
 * testCanInstantiate
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testCanInstantiate() {
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $btn = new DummyActionButton($mock);
        $this->assertInstanceOf(ActionButton::class, $btn);
    }
    // Add more tests for public methods and edge cases
}
