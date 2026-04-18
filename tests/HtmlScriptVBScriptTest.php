<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptVBScript;
use Ksfraser\HTML\VBScript\HtmlVBScriptString;

/**
 * class HtmlScriptVBScriptTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlScriptVBScriptTest extends TestCase
{
/**
 * testVBScriptScriptTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
/**
 * testVBScriptScriptTag
 *
 * @return void
 */
function testVBScriptScriptTag()
    {
        $vb = new HtmlVBScriptString('MsgBox "Hello"');
        $script = new HtmlScriptVBScript($vb);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script type="text/vbscript">', $html);
        $this->assertStringContainsString('MsgBox "Hello"', $html);
        $this->assertStringContainsString('</script>', $html);
    }
}
