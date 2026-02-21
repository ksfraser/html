<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPreformatted;

class HtmlPreformattedTest extends TestCase {
    public function testInstance() {
        $pre = new HtmlPreformatted('preformatted text');
        $this->assertInstanceOf(HtmlPreformatted::class, $pre);
    }

    // Add more tests for all public methods and edge cases
}
