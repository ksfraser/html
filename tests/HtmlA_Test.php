<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * class HtmlATest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlATest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $a = new HtmlA($mock, $mock);
        $this->assertInstanceOf(HtmlA::class, $a);
    }

    // Add more tests for all public methods and edge cases
}
