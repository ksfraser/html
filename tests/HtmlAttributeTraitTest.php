<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Traits\HtmlAttributeTrait;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

class DummyElementWithTrait {
    use HtmlAttributeTrait;
    public function __construct() {
        $this->initAttributeList();
    }
    // Public getter for testing
    public function getAttributeList() {
        return $this->attributeList;
    }
}

class HtmlAttributeTraitTest extends TestCase {
    public function testSetAttributeWithString() {
        $obj = new DummyElementWithTrait();
        $obj->setAttribute('title', 'Test Title');
        $this->assertStringContainsString('title="Test Title"', $obj->getAttributeList()->getHtml());
    }

    public function testSetAttributeWithHtmlString() {
        $obj = new DummyElementWithTrait();
        $obj->setAttribute('data', new HtmlString('Data Value'));
        $this->assertStringContainsString('data="Data Value"', $obj->getAttributeList()->getHtml());
    }

    public function testAddAttributeObject() {
        $obj = new DummyElementWithTrait();
        $obj->addAttributeObject(new HtmlAttribute('id', 'test-id'));
        $this->assertStringContainsString('id="test-id"', $obj->getAttributeList()->getHtml());
    }

    public function testAddAttributeByNameValue() {
        $obj = new DummyElementWithTrait();
        $obj->addAttribute('class', 'btn-primary');
        $this->assertStringContainsString('class="btn-primary"', $obj->getAttributeList()->getHtml());
    }
}
