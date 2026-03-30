<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptJS;
use Ksfraser\HTML\Javascript\HtmlJSString;

class HtmlScriptJSTest extends TestCase
{
    public function testJavaScriptScriptTag()
    {
        $js = new HtmlJSString('console.log("Hello");');
        $script = new HtmlScriptJS($js);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script type="text/javascript">', $html);
        $this->assertStringContainsString('console.log("Hello");', $html);
        $this->assertStringContainsString('</script>', $html);
    }
}
