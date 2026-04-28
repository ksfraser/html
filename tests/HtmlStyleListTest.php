<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Attributes\HtmlStyleList;

class HtmlStyleListTest extends TestCase {
    public function testInstance() {
        $styleList = new HtmlStyleList();
        $this->assertInstanceOf(HtmlStyleList::class, $styleList);
    }

    // Add more tests for all public methods and edge cases
}
