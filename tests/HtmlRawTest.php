<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlRaw;

class HtmlRawTest extends TestCase {
    public function testInstance() {
        $raw = new HtmlRaw('<b>raw html</b>');
        $this->assertInstanceOf(HtmlRaw::class, $raw);
    }

    // Add more tests for all public methods and edge cases
}
