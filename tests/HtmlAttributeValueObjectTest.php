<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Attributes\HtmlAttributeValueObject;

class HtmlAttributeValueObjectTest extends TestCase {
    public function testInstance() {
        $obj = new HtmlAttributeValueObject('name', 'value');
        $this->assertInstanceOf(HtmlAttributeValueObject::class, $obj);
    }

    // Add more tests for all public methods and edge cases
}
