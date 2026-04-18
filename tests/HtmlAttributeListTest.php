<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlAttributeListTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlAttributeListTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlAttributeListTest extends TestCase {
/**
 * testImplementsInterface
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testImplementsInterface
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
/**
 * testImplementsInterface
 *
 * @return void
 */
function testImplementsInterface() {
        $list = new HtmlAttributeList();
        $this->assertInstanceOf(HtmlElementInterface::/**
 * testAddAndGetAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $list);
    }

/**
 * testAddAndGetAttributes
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testAddAndGetAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
/**
 * testAddAndGetAttributes
 *
 * @return void
 */
function testAddAndGetAttributes() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('foo', 'bar');
        $list->addAttributeObject($attr);
        // Access protected property for test
        $reflection = new \ReflectionClass($list);
        $property = $reflection->getProperty('attributeArray');
        $property->setAccessible(true);
        $attributes = $property->getValue($list);
        $this->assertContains($attr, $attributes);
    }

/**
 * testGetHtmlOutputsAttributes
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetHtmlOutputsAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testGetHtmlOutputsAttributes
 *
 * @return void
 */
function testGetHtmlOutputsAttributes() {
        $list = new HtmlAttributeList();
        $attr1 = new \Ksfraser\HTML\HtmlAttribute('id', 'foo');
        $attr2 = new \Ksfraser\HTML\HtmlAttribute('class', 'bar');
        $list->addAttributeObject($attr1);
        $list->addAttributeObject($attr2);
        $html = $list->getHtml();
        $this->assertStringContainsString('id="foo"', $html);
        $this->assertStringContainsString('class="bar"', $html);
    }

/**
 * testToHtmlOutputsAttributes
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testToHtmlOutputsAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
/**
 * testToHtmlOutputsAttributes
 *
 * @return void
 */
function testToHtmlOutputsAttributes() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('data-x', 'y');
        $list->addAttributeObject($attr);
        ob_start();
        $list->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('data-x="y"', $output);
    }

/**
 * testSetAttributeReplaces
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testSetAttributeReplaces
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
/**
 * testSetAttributeReplaces
 *
 * @return void
 */
function testSetAttributeReplaces() {
        $list = new HtmlAttributeList();
        $attr1 = new \Ksfraser\HTML\HtmlAttribute('id', 'foo');
        $attr2 = new \Ksfraser\HTML\HtmlAttribute('id', 'bar');
        $list->addAttributeObject($attr1);
        $list->setAttribute($attr2);
        $reflection = new \ReflectionClass($list);
        $property = $reflection->getProperty('attributeArray');
        $property->setAccessible(true);
        $attributes = $property->getValue($list);
        $this->assertCount(1, $attributes);
        $this->assertEquals('bar', $attributes[0]->getValue());
    }

/**
 * testGetAttributeValue
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testGetAttributeValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
/**
 * testGetAttributeValue
 *
 * @return void
 */
function testGetAttributeValue() {
        $list = new HtmlAttributeList();
        $attr = new \Ksfraser\HTML\HtmlAttribute('data', 'val');
        $list->addAttributeObject($attr);
        $this->assertEquals('val', $list->getAttributeValue('data'));
        $this->assertNull($list->getAttributeValue('missing'));
    }

/**
 * testEdgeCasesEmptyList
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testEdgeCasesEmptyList
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyList
 *
 * @return void
 */
function testEdgeCasesEmptyList() {
        $list = new HtmlAttributeList();
        $html = $list->getHtml();
        $this->assertEquals('', trim($html));
    }
}
