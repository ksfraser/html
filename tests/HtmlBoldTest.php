<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlBold;

class HtmlBoldTest extends TestCase {
    public function testInstance() {
        $bold = new HtmlBold('bold text');
        $this->assertInstanceOf(HtmlBold::class, $bold);
    }

    // Add more tests for all public methods and edge cases
}
