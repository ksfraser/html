<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOrderedList;

class HtmlOrderedListTest extends TestCase {
    public function testInstance() {
        $ol = new HtmlOrderedList(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOrderedList::class, $ol);
    }

    // Add more tests for all public methods and edge cases
}
