<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlParagraph;

class HtmlParagraphTest extends TestCase {
    public function testInstance() {
        $p = new HtmlParagraph('paragraph text');
        $this->assertInstanceOf(HtmlParagraph::class, $p);
    }

    // Add more tests for all public methods and edge cases
}
