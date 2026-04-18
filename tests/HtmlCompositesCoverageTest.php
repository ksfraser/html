<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlCompositesCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlCompositesCoverageTest extends TestCase {
/**
 * testCompositesClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
/**
 * testCompositesClassesExist
 *
 * @return void
 */
function testCompositesClassesExist() {
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
