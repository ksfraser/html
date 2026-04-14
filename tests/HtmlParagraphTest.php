<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Formatting\HtmlParagraph;

/**
 * class HtmlParagraphTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlParagraphTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $p = new HtmlParagraph(new \Ksfraser\HTML\Elements\HtmlString('paragraph text'));
        $this->assertInstanceOf(HtmlParagraph::class, $p);
    }

    // Add more tests for all public methods and edge cases
}
