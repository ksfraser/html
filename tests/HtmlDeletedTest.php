<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlDeleted;

class HtmlDeletedTest extends TestCase {
    public function testInstance() {
        $del = new HtmlDeleted('deleted text');
        $this->assertInstanceOf(HtmlDeleted::class, $del);
    }

    // Add more tests for all public methods and edge cases
}
