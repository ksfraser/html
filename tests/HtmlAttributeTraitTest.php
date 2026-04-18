<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Traits\HtmlAttributeTrait;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class DummyElementWithTrait
 *
 * @since 1.0.4 2026-02-21
 */
class DummyElementWithTrait {
    use HtmlAttributeTrait;
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
function __construct() {
        $this->initAttributeList();
    }
    // Public getter for testing
/**
 * getAttributeList
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
/**
 * getAttributeList
 *
 * @return void
 */
function getAttributeList() {
        return $this->attributeList;
    }
}

/**
 * class HtmlAttributeTraitTest
 *
 * @since 1.0.4 2026-02-21
 */
class HtmlAttributeTraitTest extends TestCase {
/**
 * testSetAttributeWithString
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
/**
 * testSetAttributeWithString
 *
 * @return void
 */
function testSetAttributeWithString() {
        $obj = new DummyElementWithTrait();
        $obj->setAttribute('title', 'Test Title');
        $this->assertStringContainsString('title="Test Title"', $obj->getAttributeList()->getHtml());
    }

/**
 * testSetAttributeWithHtmlString
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
/**
 * testSetAttributeWithHtmlString
 *
 * @return void
 */
function testSetAttributeWithHtmlString() {
        $obj = new DummyElementWithTrait();
        $obj->setAttribute('data', new HtmlString('Data Value'));
        $this->assertStringContainsString('data="Data Value"', $obj->getAttributeList()->getHtml());
    }

/**
 * testAddAttributeObject
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
/**
 * testAddAttributeObject
 *
 * @return void
 */
function testAddAttributeObject() {
        $obj = new DummyElementWithTrait();
        $obj->addAttributeObject(new HtmlAttribute('id', 'test-id'));
        $this->assertStringContainsString('id="test-id"', $obj->getAttributeList()->getHtml());
    }

/**
 * testAddAttributeByNameValue
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
/**
 * testAddAttributeByNameValue
 *
 * @return void
 */
function testAddAttributeByNameValue() {
        $obj = new DummyElementWithTrait();
        $obj->addAttribute('class', 'btn-primary');
        $this->assertStringContainsString('class="btn-primary"', $obj->getAttributeList()->getHtml());
    }
}
