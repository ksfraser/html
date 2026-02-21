<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSpan;

class HtmlSpanTest extends TestCase {
    public function testInstance() {
        $span = new HtmlSpan('content');
        $this->assertInstanceOf(HtmlSpan::class, $span);
    }

    // Add more tests for all public methods and edge cases
}
