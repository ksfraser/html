<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttribute;

class HtmlAttributeTest extends TestCase
{
    public function testValidAttributeName()
    {
        $attr = new HtmlAttribute('data-test', 'value');
        $this->assertEquals('data-test', $attr->getName());
        $this->assertEquals('value', $attr->getValue());
    }

    public function testGetHtml()
    {
        $attr = new HtmlAttribute('id', 'foo');
        $html = $attr->getHtml();
        $this->assertEquals('id="foo"', $html);
    }

    public function testToHtmlOutputsHtml()
    {
        $attr = new HtmlAttribute('class', 'bar');
        ob_start();
        $attr->toHtml();
        $output = ob_get_clean();
        $this->assertEquals('class="bar"', $output);
    }

    public function testEdgeCasesEmptyValue()
    {
        $attr = new HtmlAttribute('data-empty', '');
        $html = $attr->getHtml();
        $this->assertEquals('data-empty=""', $html);
    }

    public function testInvalidAttributeNameThrows()
    {
        $this->expectException(InvalidArgumentException::class);
        new HtmlAttribute('invalid name', 'value');
    }
}
