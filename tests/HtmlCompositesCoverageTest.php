<?php
use PHPUnit\Framework\TestCase;

class HtmlCompositesCoverageTest extends TestCase {
    public function testCompositesClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Composites\\HtmlLabelRow',
            'Ksfraser\\HTML\\Composites\\HTML_ROW',
            'Ksfraser\\HTML\\Composites\\HTML_ROW_LABEL',
            'Ksfraser\\HTML\\Composites\\HTML_ROW_LABELDecorator',
            'Ksfraser\\HTML\\Composites\\HTML_TABLE',
            'Ksfraser\\HTML\\Composites\\LabelRowBase',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
