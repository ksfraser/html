<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlA;

/**
 * class HtmlATest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlATest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlATest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testInstance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $a = new HtmlA($mock, $mock);
        $this->assertInstanceOf(HtmlA::/**
 * No description.
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $a);
    }

    // Add more tests for all public methods and edge cases
}
