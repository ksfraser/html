<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Attributes\HtmlNameValue;

class HtmlNameValueTest extends TestCase {
    public function testInstance() {
        $nv = new HtmlNameValue('name', 'value');
        $this->assertInstanceOf(HtmlNameValue::class, $nv);
    }

    // Add more tests for all public methods and edge cases
}
