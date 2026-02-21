<?php
use PHPUnit\Framework\TestCase;

class HtmlFactoryCoverageTest extends TestCase {
    public function testFactoryClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Factory\\ActionLink',
            'Ksfraser\\HTML\\Factory\\AddLink',
            'Ksfraser\\HTML\\Factory\\CreateLink',
            'Ksfraser\\HTML\\Factory\\DeleteLink',
            'Ksfraser\\HTML\\Factory\\EditLink',
            'Ksfraser\\HTML\\Factory\\ListLink',
            'Ksfraser\\HTML\\Factory\\ViewLink',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
