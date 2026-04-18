<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlButtonsCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlButtonsCoverageTest extends TestCase {
/**
 * testButtonsClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
/**
 * testButtonsClassesExist
 *
 * @return void
 */
function testButtonsClassesExist() {
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
