<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlCellsCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlCellsCoverageTest extends TestCase {
/**
 * testCellsClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
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
