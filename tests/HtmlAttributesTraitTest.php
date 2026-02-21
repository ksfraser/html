<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttributesTrait;

class HtmlAttributesTraitTest extends TestCase {
    public function testTraitExists() {
        $this->assertTrue(trait_exists(HtmlAttributesTrait::class));
    }

    // Add more tests for trait methods and edge cases
}
