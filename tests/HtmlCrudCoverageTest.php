<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlCrudCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlCrudCoverageTest extends TestCase {
/**
 * testCrudClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testCrudClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Crud\\CrudField',
            'Ksfraser\\HTML\\Crud\\LegacyFieldsArrayCrudDescriptor',
            'Ksfraser\\HTML\\Crud\\SchemaArrayCrudDescriptor',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
