<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlSub;

class HtmlSubTest extends TestCase {
    public function testInstance() {
        $sub = new HtmlSub('subscript text');
        $this->assertInstanceOf(HtmlSub::class, $sub);
    }

    // Add more tests for all public methods and edge cases
}
