<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlScriptJS;
use Ksfraser\HTML\Javascript\HtmlJSString;

/**
 * class HtmlScriptJSTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlScriptJSTest extends TestCase
{
/**
 * testJavaScriptScriptTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
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
