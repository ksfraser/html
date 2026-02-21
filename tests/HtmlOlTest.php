<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOl;

class HtmlOlTest extends TestCase {
    public function testInstance() {
        $ol = new HtmlOl(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOl::class, $ol);
    }

    // Add more tests for all public methods and edge cases
}
