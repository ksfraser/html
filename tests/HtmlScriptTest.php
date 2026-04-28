<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptJS;
use Ksfraser\HTML\Javascript\HtmlJSString;

class HtmlScriptTest extends TestCase {
    public function testInstance() {
        $script = new HtmlScriptJS(new HtmlJSString('console.log(1);'));
        $this->assertInstanceOf(HtmlScriptJS::class, $script);
    }

    // Add more tests for all public methods and edge cases
}
