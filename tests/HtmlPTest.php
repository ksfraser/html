<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlP;

class HtmlPTest extends TestCase {
    public function testInstance() {
        $p = new HtmlP('paragraph text');
        $this->assertInstanceOf(HtmlP::class, $p);
    }

    // Add more tests for all public methods and edge cases
}
