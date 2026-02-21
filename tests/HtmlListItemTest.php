<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlListItem;

class HtmlListItemTest extends TestCase {
    public function testInstance() {
        $li = new HtmlListItem('item');
        $this->assertInstanceOf(HtmlListItem::class, $li);
    }

    // Add more tests for all public methods and edge cases
}
