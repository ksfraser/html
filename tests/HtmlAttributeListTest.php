<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlAttributeListTest extends TestCase {
    public function testImplementsInterface() {
        $list = new HtmlAttributeList();
        $this->assertInstanceOf(HtmlElementInterface::class, $list);
    }

    public function testAddAndGetAttributes() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('foo', 'bar');
        $list->addAttribute($attr);
        // Access protected property for test
        $reflection = new \ReflectionClass($list);
        $property = $reflection->getProperty('attributeArray');
        $property->setAccessible(true);
        $attributes = $property->getValue($list);
        $this->assertContains($attr, $attributes);
    }

    public function testGetHtmlOutputsAttributes() {
        $list = new HtmlAttributeList();
        $attr1 = new \Ksfraser\HTML\HtmlAttribute('id', 'foo');
        $attr2 = new \Ksfraser\HTML\HtmlAttribute('class', 'bar');
        $list->addAttribute($attr1);
        $list->addAttribute($attr2);
        $html = $list->getHtml();
        $this->assertStringContainsString('id="foo"', $html);
        $this->assertStringContainsString('class="bar"', $html);
    }

    public function testToHtmlOutputsAttributes() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('data-x', 'y');
        $list->addAttribute($attr);
        ob_start();
        $list->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('data-x="y"', $output);
    }

    public function testSetAttributeReplaces() {
        $list = new HtmlAttributeList();
        $attr1 = new \Ksfraser\HTML\HtmlAttribute('id', 'foo');
        $attr2 = new \Ksfraser\HTML\HtmlAttribute('id', 'bar');
        $list->addAttribute($attr1);
        $list->setAttribute($attr2);
        $reflection = new \ReflectionClass($list);
        $property = $reflection->getProperty('attributeArray');
        $property->setAccessible(true);
        $attributes = $property->getValue($list);
        $this->assertCount(1, $attributes);
        $this->assertEquals('bar', $attributes[0]->getValue());
    }

    public function testGetAttributeValue() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('data', 'val');
        $list->addAttribute($attr);
        $this->assertEquals('val', $list->getAttributeValue('data'));
        $this->assertNull($list->getAttributeValue('missing'));
    }

    public function testEdgeCasesEmptyList() {
        $list = new HtmlAttributeList();
        $html = $list->getHtml();
        $this->assertEquals('', trim($html));
    }
}
