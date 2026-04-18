<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Javascript\HtmlJSString;

/**
 * class HtmlJSStringTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlJSStringTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlJSStringTest extends TestCase {
/**
 * testHtmlJSStringEscapesContent
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testHtmlJSStringEscapesContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
/**
 * testHtmlJSStringEscapesContent
 *
 * @return void
 */
function testHtmlJSStringEscapesContent() {
        $js = new HtmlJSString(new \Ksfraser\HTML\Elements\HtmlString('console.log("<script>");'));
        $html = $js->getHtml();
        $this->assertStringContainsString('console.log', $html);
        $this->assertStringNotContainsString('<script>', $html); // Should be escaped
    }

/**
 * testHtmlJSStringImplementsInterface
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testHtmlJSStringImplementsInterface
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
/**
 * testHtmlJSStringImplementsInterface
 *
 * @return void
 */
function testHtmlJSStringImplementsInterface() {
        $js = new HtmlJSString('alert(1);');
        $this->assertInstanceOf(HtmlJSString::/**
 * assertTrue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $js);
        $this->assertTrue(method_exists($js, 'getHtml'));
    }
}
