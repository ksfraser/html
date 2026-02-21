<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMark;

class HtmlMarkTest extends TestCase {
    public function testInstance() {
        $mark = new HtmlMark('marked text');
        $this->assertInstanceOf(HtmlMark::class, $mark);
    }

    // Add more tests for all public methods and edge cases
}
