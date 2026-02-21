<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlStrong;

class HtmlStrongTest extends TestCase {
    public function testInstance() {
        $strong = new HtmlStrong('strong text');
        $this->assertInstanceOf(HtmlStrong::class, $strong);
    }

    // Add more tests for all public methods and edge cases
}
