<?php
use PHPUnit\Framework\TestCase;

class HtmlFormattingCoverageTest extends TestCase {
    public function testFormattingClassesExist() {
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
