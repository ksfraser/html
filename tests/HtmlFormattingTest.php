<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlFormatting;

class HtmlFormattingTest extends TestCase {
    public function testInstance() {
        $fmt = new HtmlFormatting('formatted text');
        $this->assertInstanceOf(HtmlFormatting::class, $fmt);
    }

    // Add more tests for all public methods and edge cases
}
