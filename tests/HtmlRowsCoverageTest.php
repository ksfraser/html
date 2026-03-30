<?php
use PHPUnit\Framework\TestCase;

class HtmlRowsCoverageTest extends TestCase {
    public function testRowsClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Rows\\BaseTableRow',
            'Ksfraser\\HTML\\Rows\\InterestFreqTableRow',
            'Ksfraser\\HTML\\Rows\\LoanSummaryTableRow',
            'Ksfraser\\HTML\\Rows\\LoanTypeTableRow',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
