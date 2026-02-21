<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSmall;

class HtmlSmallTest extends TestCase {
    public function testInstance() {
        $small = new HtmlSmall('small text');
        $this->assertInstanceOf(HtmlSmall::class, $small);
    }

    // Add more tests for all public methods and edge cases
}
