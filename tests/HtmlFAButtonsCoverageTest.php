<?php
use PHPUnit\Framework\TestCase;

class HtmlFAButtonsCoverageTest extends TestCase {
    public function testFAButtonsClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\FAButtons\\ViewLoanActionButton',
            'Ksfraser\\HTML\\FAButtons\\EditTypeActionButton',
            'Ksfraser\\HTML\\FAButtons\\EditLoanActionButton',
            'Ksfraser\\HTML\\FAButtons\\EditFrequencyActionButton',
            'Ksfraser\\HTML\\FAButtons\\DeleteTypeActionButton',
            'Ksfraser\\HTML\\FAButtons\\DeleteFrequencyActionButton',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
