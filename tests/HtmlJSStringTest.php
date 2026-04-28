<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Javascript\HtmlJSString;

class HtmlJSStringTest extends TestCase {
    public function testHtmlJSStringReturnsRawContent() {
        $js = new HtmlJSString('console.log("<script>");');
        $html = $js->getHtml();
        $this->assertStringContainsString('console.log', $html);
        // Script content is returned raw (not HTML-escaped) since it lives inside <script> tags
        $this->assertStringContainsString('<script>', $html);
    }

    public function testHtmlJSStringImplementsInterface() {
        $js = new HtmlJSString('alert(1);');
        $this->assertInstanceOf(HtmlJSString::class, $js);
        $this->assertTrue(method_exists($js, 'getHtml'));
    }
}
