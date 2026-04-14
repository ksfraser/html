<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOrderedList;

/**
 * class HtmlOrderedListTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlOrderedListTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $ol = new HtmlOrderedList(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOrderedList::class, $ol);
    }

    // Add more tests for all public methods and edge cases
}
