<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSup;

class HtmlSupTest extends TestCase {
    public function testInstance() {
        $sup = new HtmlSup('superscript text');
        $this->assertInstanceOf(HtmlSup::class, $sup);
    }

    // Add more tests for all public methods and edge cases
}
