<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptTypeScript;
use Ksfraser\HTML\Typescript\HtmlTypeScriptString;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlScriptTypeScriptTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlScriptTypeScriptTest extends TestCase
{
/**
 * testTypeScriptScriptTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testTypeScriptScriptTag()
    {
        $content = new HtmlTypeScriptString(new HtmlString('let x: number = 5;'));
        $script = new HtmlScriptTypeScript($content);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script', $html);
        $this->assertStringContainsString('type="application/typescript"', $html);
        $this->assertStringContainsString('let x: number = 5;', $html);
    }
}
