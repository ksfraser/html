<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Javascript\HtmlJSString;

class HtmlJSStringTest extends TestCase {
    public function testHtmlJSStringEscapesContent() {
        $js = new HtmlJSString(new \Ksfraser\HTML\Elements\HtmlString('console.log("<script>");'));
        $html = $js->getHtml();
        $this->assertStringContainsString('console.log', $html);
        $this->assertStringNotContainsString('<script>', $html); // Should be escaped
    }

    public function testHtmlJSStringImplementsInterface() {
        $js = new HtmlJSString('alert(1);');
        $this->assertInstanceOf(HtmlJSString::class, $js);
        $this->assertTrue(method_exists($js, 'getHtml'));
    }
}
