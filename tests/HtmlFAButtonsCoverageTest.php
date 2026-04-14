<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlFAButtonsCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFAButtonsCoverageTest extends TestCase {
/**
 * testFAButtonsClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
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
