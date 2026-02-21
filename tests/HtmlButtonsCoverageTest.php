<?php
use PHPUnit\Framework\TestCase;

class HtmlButtonsCoverageTest extends TestCase {
    public function testButtonsClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Buttons\\ActionButton',
            'Ksfraser\\HTML\\Buttons\\AddButton',
            'Ksfraser\\HTML\\Buttons\\CancelButton',
            'Ksfraser\\HTML\\Buttons\\CloseButton',
            'Ksfraser\\HTML\\Buttons\\DeleteButton',
            'Ksfraser\\HTML\\Buttons\\EditButton',
            'Ksfraser\\HTML\\Buttons\\SubmitButton',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
