<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScript;

class HtmlScriptTest extends TestCase {
    public function testInstance() {
        $script = new HtmlScript('console.log(1);');
        $this->assertInstanceOf(HtmlScript::class, $script);
    }

    // Add more tests for all public methods and edge cases
}
