<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlB;

class HtmlBTest extends TestCase {
    public function testInstance() {
        $b = new HtmlB('bold text');
        $this->assertInstanceOf(HtmlB::class, $b);
    }

    // Add more tests for all public methods and edge cases
}
