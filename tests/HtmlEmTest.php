<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlEm;

class HtmlEmTest extends TestCase {
    public function testInstance() {
        $em = new HtmlEm('emphasized text');
        $this->assertInstanceOf(HtmlEm::class, $em);
    }

    // Add more tests for all public methods and edge cases
}
