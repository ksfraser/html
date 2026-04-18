<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlFactoryCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFactoryCoverageTest extends TestCase {
/**
 * testFactoryClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
/**
 * testFactoryClassesExist
 *
 * @return void
 */
function testFactoryClassesExist() {
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
