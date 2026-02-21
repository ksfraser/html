<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlInserted;

class HtmlInsertedTest extends TestCase {
    public function testInstance() {
        $ins = new HtmlInserted('inserted text');
        $this->assertInstanceOf(HtmlInserted::class, $ins);
    }

    // Add more tests for all public methods and edge cases
}
