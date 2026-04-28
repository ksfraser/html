<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptTypeScript;
use Ksfraser\HTML\Typescript\HtmlTypeScriptString;
use Ksfraser\HTML\Elements\HtmlString;

class HtmlScriptTypeScriptTest extends TestCase
{
    public function testTypeScriptScriptTag()
    {
        $content = new HtmlTypeScriptString('let x: number = 5;');
        $script = new HtmlScriptTypeScript($content);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script', $html);
        $this->assertStringContainsString('type="application/typescript"', $html);
        $this->assertStringContainsString('let x: number = 5;', $html);
    }
}
