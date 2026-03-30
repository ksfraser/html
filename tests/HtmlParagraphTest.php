<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlParagraph;

class HtmlParagraphTest extends TestCase {
    public function testInstance() {
        $p = new HtmlParagraph(new \Ksfraser\HTML\Elements\HtmlString('paragraph text'));
        $this->assertInstanceOf(HtmlParagraph::class, $p);
    }

    // Add more tests for all public methods and edge cases
}
