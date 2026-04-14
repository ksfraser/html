<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttribute;

/**
 * class HtmlAttributeTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlAttributeTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlAttributeTest extends TestCase
{
/**
 * testValidAttributeName
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testValidAttributeName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testValidAttributeName()
    {
        $attr = new HtmlAttribute('data-test', 'value');
        $this->assertEquals('data-test', $attr->getName());
        $this->assertEquals('value', $attr->getValue());
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetHtml()
    {
        $attr = new HtmlAttribute('id', 'foo');
        $html = $attr->getHtml();
        $this->assertEquals('id="foo"', $html);
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testToHtmlOutputsHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testToHtmlOutputsHtml()
    {
        $attr = new HtmlAttribute('class', 'bar');
        ob_start();
        $attr->toHtml();
        $output = ob_get_clean();
        $this->assertEquals('class="bar"', $output);
    }

/**
 * testEdgeCasesEmptyValue
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testEdgeCasesEmptyValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEdgeCasesEmptyValue()
    {
        $attr = new HtmlAttribute('data-empty', '');
        $html = $attr->getHtml();
        $this->assertEquals('data-empty=""', $html);
    }

/**
 * testInvalidAttributeNameThrows
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testInvalidAttributeNameThrows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testInvalidAttributeNameThrows()
    {
        $this->expectException(InvalidArgumentException::/**
 * HtmlAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        new HtmlAttribute('invalid name', 'value');
    }
}
