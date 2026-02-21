<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Attributes\HtmlAttributeValueObject;

class HtmlAttributeValueObjectTest extends TestCase {
    public function testInstance() {
        $this->assertTrue(class_exists(HtmlAttributeValueObject::class));
    }

    // Add more tests for all public methods and edge cases
}
