<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttribute;

class HtmlAttributeTest extends TestCase
{
    public function testValidAttributeName()
    {
        $attr = new HtmlAttribute('data-test', 'value');
        $this->assertEquals('data-test', $attr->getName());
    }

    public function testInvalidAttributeNameThrows()
    {
        $this->expectException(InvalidArgumentException::class);
        new HtmlAttribute('invalid name', 'value');
    }
}
