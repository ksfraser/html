<?php
use PHPUnit\Framework\TestCase;

/**
 * class HtmlScriptHandlersCoverageTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlScriptHandlersCoverageTest extends TestCase {
/**
 * testScriptHandlersClassesExist
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
/**
 * testScriptHandlersClassesExist
 *
 * @return void
 */
function testScriptHandlersClassesExist() {
        $classes = [
            'Ksfraser\\HTML\\ScriptHandlers\\BaseScriptHandler',
            'Ksfraser\\HTML\\ScriptHandlers\\InterestFreqScriptHandler',
            'Ksfraser\\HTML\\ScriptHandlers\\LoanScriptHandler',
            'Ksfraser\\HTML\\ScriptHandlers\\LoanTypeScriptHandler',
            'Ksfraser\\HTML\\ScriptHandlers\\ReportScriptHandler',
        ];
        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class), "$class does not exist");
        }
    }
}
