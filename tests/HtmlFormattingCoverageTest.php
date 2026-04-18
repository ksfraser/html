<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlFormattingCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFormattingCoverageTest extends TestCase {
/**
 * testFormattingClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
/**
 * testFormattingClassesExist
 *
 * @return void
 */
function testFormattingClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Formatting\\HtmlB',
            'Ksfraser\\HTML\\Formatting\\HtmlBold',
            'Ksfraser\\HTML\\Formatting\\HtmlDeleted',
            'Ksfraser\\HTML\\Formatting\\HtmlEm',
            'Ksfraser\\HTML\\Formatting\\HtmlFormatting',
            'Ksfraser\\HTML\\Formatting\\HtmlInserted',
            'Ksfraser\\HTML\\Formatting\\HtmlItalic',
            'Ksfraser\\HTML\\Formatting\\HtmlStrong',
            'Ksfraser\\HTML\\Formatting\\HtmlSub',
            'Ksfraser\\HTML\\Formatting\\HtmlSup',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
