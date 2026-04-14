<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptJSON;
use Ksfraser\HTML\Json\HtmlJsonString;

/**
 * class HtmlScriptJSONTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlScriptJSONTest extends TestCase
{
/**
 * testJsonScriptTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
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
