<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptVBScript;
use Ksfraser\HTML\VBScript\HtmlVBScriptString;

class HtmlScriptVBScriptTest extends TestCase
{
    public function testVBScriptScriptTag()
    {
        $vb = new HtmlVBScriptString('MsgBox "Hello"');
        $script = new HtmlScriptVBScript($vb);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script type="text/vbscript">', $html);
        $this->assertStringContainsString('MsgBox "Hello"', $html);
        $this->assertStringContainsString('</script>', $html);
    }
}
