<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlA;

class HtmlATest extends TestCase {
    public function testInstance() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $a = new HtmlA($mock, $mock);
        $this->assertInstanceOf(HtmlA::class, $a);
    }

    // Add more tests for all public methods and edge cases
}
