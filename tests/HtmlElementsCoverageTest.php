<?php
use PHPUnit\Framework\TestCase;

class HtmlElementsCoverageTest extends TestCase {
    public function testElementsClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Elements\\HtmlButton',
            'Ksfraser\\HTML\\Elements\\HtmlDiv',
            'Ksfraser\\HTML\\Elements\\HtmlA',
            'Ksfraser\\HTML\\Elements\\HtmlSpan',
            'Ksfraser\\HTML\\Elements\\HtmlSmall',
            'Ksfraser\\HTML\\Elements\\HtmlMark',
            'Ksfraser\\HTML\\Elements\\HtmlOption',
            'Ksfraser\\HTML\\Elements\\HtmlSelect',
            'Ksfraser\\HTML\\Elements\\HtmlScript',
            'Ksfraser\\HTML\\Elements\\HtmlRaw',
            'Ksfraser\\HTML\\Elements\\HtmlPreformatted',
            'Ksfraser\\HTML\\Formatting\\HtmlParagraph',
            'Ksfraser\\HTML\\Formatting\\HtmlP',
            'Ksfraser\\HTML\\Elements\\HtmlOrderedList',
            'Ksfraser\\HTML\\Elements\\HtmlOl',
            'Ksfraser\\HTML\\Elements\\HtmlListItem',
            'Ksfraser\\HTML\\Elements\\HtmlLi',
            'Ksfraser\\HTML\\Elements\\HtmlItalic',
            // Add all other element classes
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
