<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlAttributesCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlAttributesCoverageTest extends TestCase {
/**
 * testAttributesClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
/**
 * testAttributesClassesExist
 *
 * @return void
 */
function testAttributesClassesExist() {
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
