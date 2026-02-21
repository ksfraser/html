<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlA;

class HtmlATest extends TestCase {
    public function testInstance() {
        $a = new HtmlA('link', 'href');
        $this->assertInstanceOf(HtmlA::class, $a);
    }

    // Add more tests for all public methods and edge cases
}
