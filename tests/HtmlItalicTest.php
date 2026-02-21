<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlItalic;

class HtmlItalicTest extends TestCase {
    public function testInstance() {
        $italic = new HtmlItalic('italic text');
        $this->assertInstanceOf(HtmlItalic::class, $italic);
    }

    // Add more tests for all public methods and edge cases
}
