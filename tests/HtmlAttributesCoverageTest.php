<?php
use PHPUnit\Framework\TestCase;

class HtmlAttributesCoverageTest extends TestCase {
    public function testAttributesClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Attributes\\HtmlAttributeValueObject',
            'Ksfraser\\HTML\\Attributes\\HtmlNameValue',
            'Ksfraser\\HTML\\Attributes\\HtmlStyleList',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
