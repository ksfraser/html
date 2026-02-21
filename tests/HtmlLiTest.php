<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlLi;

class HtmlLiTest extends TestCase {
    public function testInstance() {
        $li = new HtmlLi('item');
        $this->assertInstanceOf(HtmlLi::class, $li);
    }

    // Add more tests for all public methods and edge cases
}
