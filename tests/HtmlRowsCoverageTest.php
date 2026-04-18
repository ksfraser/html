<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlRowsCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlRowsCoverageTest extends TestCase {
/**
 * testRowsClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
/**
 * testRowsClassesExist
 *
 * @return void
 */
function testRowsClassesExist() {
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
