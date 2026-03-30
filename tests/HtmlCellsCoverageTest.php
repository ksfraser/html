<?php
use PHPUnit\Framework\TestCase;

class HtmlCellsCoverageTest extends TestCase {
    public function testCellsClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\Cells\\AmountTableCell',
            'Ksfraser\\HTML\\Cells\\BaseTableCell',
            'Ksfraser\\HTML\\Cells\\BorrowerTableCell',
            'Ksfraser\\HTML\\Cells\\DescriptionTableCell',
            'Ksfraser\\HTML\\Cells\\EditableFrequencyDescriptionCell',
            'Ksfraser\\HTML\\Cells\\EditableFrequencyNameCell',
            'Ksfraser\\HTML\\Cells\\EditableLoanAmountCell',
            'Ksfraser\\HTML\\Cells\\EditableLoanBorrowerCell',
            'Ksfraser\\HTML\\Cells\\EditableLoanStatusCell',
            'Ksfraser\\HTML\\Cells\\EditableTypeDescriptionCell',
            'Ksfraser\\HTML\\Cells\\EditableTypeNameCell',
            'Ksfraser\\HTML\\Cells\\IdFrequencyTableCell',
            'Ksfraser\\HTML\\Cells\\IdLoanTableCell',
            'Ksfraser\\HTML\\Cells\\IdTableCell',
            'Ksfraser\\HTML\\Cells\\IdTypeTableCell',
            'Ksfraser\\HTML\\Cells\\NameTableCell',
            'Ksfraser\\HTML\\Cells\\StatusTableCell',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
