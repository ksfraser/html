<?php
use PHPUnit\Framework\TestCase;

class HtmlScriptHandlersCoverageTest extends TestCase {
    public function testScriptHandlersClassesExist() {
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
