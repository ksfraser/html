<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptJSON;
use Ksfraser\HTML\Json\HtmlJsonString;

class HtmlScriptJSONTest extends TestCase
{
    public function testJsonScriptTag()
    {
        $json = new HtmlJsonString('{"key": "value"}');
        $script = new HtmlScriptJSON($json);
        $html = $script->getHtml();
        $this->assertStringContainsString('<script type="application/json">', $html);
        $this->assertStringContainsString('{"key": "value"}', $html);
        $this->assertStringContainsString('</script>', $html);
    }
}
