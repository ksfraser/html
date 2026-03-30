<?php
use PHPUnit\Framework\TestCase;

class HtmlCrudCoverageTest extends TestCase {
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
