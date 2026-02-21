<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlDiv;

class HtmlDivTest extends TestCase {
    public function testInstance() {
        $div = new HtmlDiv('content');
        $this->assertInstanceOf(HtmlDiv::class, $div);
    }

    // Add more tests for all public methods and edge cases
}
