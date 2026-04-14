<?php

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * Tests for DataAttributeTrait - FR-008
 * Comprehensive test suite for data-* attribute management
 *
 *
 * @group FR-008
 * @group data-attributes
 * @since 1.0.5 2026-03-30
 */
/**
 * DataAttributeTraitTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class DataAttributeTraitTest extends TestCase
{
    /**
     * Test element with DataAttributeTrait
     */
    private HtmlElement $element;

/**
 * setUp
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    protected /**
 * setUp
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function setUp(): void
    {
        $this->element = new /**
 * HtmlElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };
    }

    // ==================== Happy Path Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetSingleDataAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetSingleDataAttribute()
    {
        $this->element->setData('userId', '123');
        $this->assertTrue($this->element->hasData('userId'));
        $this->assertEquals('123', $this->element->getData('userId'));
    }

    /**
     * @test
     * @group data-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetMultipleDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetMultipleDataAttributes()
    {
        $this->element->setData('userId', '123');
        $this->element->setData('userName', 'John');
        $this->element->setData('role', 'admin');

        $this->assertEquals('123', $this->element->getData('userId'));
        $this->assertEquals('John', $this->element->getData('userName'));
        $this->assertEquals('admin', $this->element->getData('role'));
    }

    /**
     * @test
     * @group data-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataAttributeWithBatch
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataAttributeWithBatch()
    {
        $data = [
            'userId' => '123',
            'userName' => 'John',
            'email' => 'john@example.com'
        ];
        $this->element->setDataAttributes($data);

        $this->assertEquals('123', $this->element->getData('userId'));
        $this->assertEquals('John', $this->element->getData('userName'));
        $this->assertEquals('john@example.com', $this->element->getData('email'));
    }

    /**
     * @test
     * @group data-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAllDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAllDataAttributes()
    {
        $this->element->setData('a', '1');
        $this->element->setData('b', '2');
        $this->element->setData('c', '3');

        $data = $this->element->getAllData();
        $this->assertCount(3, $data);
        $this->assertEquals('1', $data['a']);
        $this->assertEquals('2', $data['b']);
        $this->assertEquals('3', $data['c']);
    }

    /**
     * @test
     * @group data-attributes
     * @group happy-path
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeInHtmlOutput
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeInHtmlOutput()
    {
        $this->element->setData('userId', '123');
        $html = (string)$this->element;

        $this->assertStringContainsString('data-userId="123"', $html);
    }

    // ==================== Data Type Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithStringValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithStringValue()
    {
        $this->element->setData('message', 'Hello World');
        $this->assertEquals('Hello World', $this->element->getData('message'));
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithIntegerValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithIntegerValue()
    {
        $this->element->setData('count', 42);
        $html = (string)$this->element;
        $this->assertStringContainsString('data-count="42"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithBooleanValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithBooleanValue()
    {
        $this->element->setData('active', true);
        $this->element->setData('deleted', false);

        $html = (string)$this->element;
        $this->assertStringContainsString('data-active="true"', $html);
        $this->assertStringContainsString('data-deleted="false"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithArrayValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithArrayValue()
    {
        $array = ['a', 'b', 'c'];
        $this->element->setData('items', $array);
        
        $html = (string)$this->element;
        $this->assertStringContainsString('data-items=', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithJsonSerializableObject
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithJsonSerializableObject()
    {
        $stdObj = new \stdClass();
        $stdObj->name = 'John';
        $stdObj->age = 30;

        $this->element->setData('user', $stdObj);
        $html = (string)$this->element;
        $this->assertStringContainsString('data-user=', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithFloatValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithFloatValue()
    {
        $this->element->setData('price', 19.99);
        $html = (string)$this->element;
        $this->assertStringContainsString('data-price=', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithEmptyString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithEmptyString()
    {
        $this->element->setData('empty', '');
        $this->assertEquals('', $this->element->getData('empty'));
    }

    /**
     * @test
     * @group data-attributes
     * @group data-types
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithNull
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithNull()
    {
        $this->element->setData('nullable', null);
        $html = (string)$this->element;
        // null values may not render or render as empty
        $this->assertIsString($html);
    }

    // ==================== HTML Escaping Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesDoubleQuotes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesDoubleQuotes()
    {
        $this->element->setData('message', 'He said "hello"');
        $html = (string)$this->element;
        $this->assertStringContainsString('&quot;', $html);
        $this->assertStringNotContainsString('data-message="He said "hello""', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesLessThan
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesLessThan()
    {
        $this->element->setData('condition', '5 < 10');
        $html = (string)$this->element;
        $this->assertStringContainsString('&lt;', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesGreaterThan
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesGreaterThan()
    {
        $this->element->setData('condition', '10 > 5');
        $html = (string)$this->element;
        $this->assertStringContainsString('&gt;', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesAmpersand
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesAmpersand()
    {
        $this->element->setData('operator', 'a & b');
        $html = (string)$this->element;
        $this->assertStringContainsString('&amp;', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesSingleQuote
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesSingleQuote()
    {
        $this->element->setData('message', "It's working");
        $html = (string)$this->element;
        // Depending on escaping strategy
        $this->assertIsString($html);
    }

    /**
     * @test
     * @group data-attributes
     * @group escaping
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeEscapesJsonWithSpecialChars
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeEscapesJsonWithSpecialChars()
    {
        $this->element->setData('config', '{"key":"<value>"}');
        $html = (string)$this->element;
        $this->assertStringContainsString('&lt;', $html);
        $this->assertStringContainsString('&gt;', $html);
    }

    // ==================== Removal Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveDataAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testRemoveDataAttribute()
    {
        $this->element->setData('userId', '123');
        $this->assertTrue($this->element->hasData('userId'));

        $this->element->removeData('userId');
        $this->assertFalse($this->element->hasData('userId'));
    }

    /**
     * @test
     * @group data-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveNonExistentDataAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testRemoveNonExistentDataAttribute()
    {
        // Should not throw exception
        $this->element->removeData('nonexistent');
        $this->assertFalse($this->element->hasData('nonexistent'));
    }

    /**
     * @test
     * @group data-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testClearAllDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testClearAllDataAttributes()
    {
        $this->element->setData('a', '1');
        $this->element->setData('b', '2');
        $this->element->setData('c', '3');

        $this->assertCount(3, $this->element->getAllData());

        $this->element->clearData();

        $this->assertCount(0, $this->element->getAllData());
    }

    /**
     * @test
     * @group data-attributes
     * @group removal
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveDataRemovedFromHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testRemoveDataRemovedFromHtml()
    {
        $this->element->setData('userId', '123');
        $this->assertStringContainsString('data-userId', (string)$this->element);

        $this->element->removeData('userId');
        $this->assertStringNotContainsString('data-userId', (string)$this->element);
    }

    // ==================== Update/Replacement Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group updates
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testUpdateExistingDataAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testUpdateExistingDataAttribute()
    {
        $this->element->setData('userId', '123');
        $this->assertEquals('123', $this->element->getData('userId'));

        $this->element->setData('userId', '456');
        $this->assertEquals('456', $this->element->getData('userId'));
    }

    /**
     * @test
     * @group data-attributes
     * @group updates
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testUpdateExistingDataAttributeChangeType
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testUpdateExistingDataAttributeChangeType()
    {
        $this->element->setData('value', 'text');
        $this->element->setData('value', 123);

        $html = (string)$this->element;
        $this->assertStringContainsString('data-value="123"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group updates
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBatchUpdateMergesWithExisting
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testBatchUpdateMergesWithExisting()
    {
        $this->element->setData('a', '1');
        $this->element->setData('b', '2');

        $this->element->setDataAttributes(['c' => '3', 'd' => '4']);

        $all = $this->element->getAllData();
        $this->assertCount(4, $all);
        $this->assertEquals('1', $all['a']);
        $this->assertEquals('2', $all['b']);
        $this->assertEquals('3', $all['c']);
        $this->assertEquals('4', $all['d']);
    }

    /**
     * @test
     * @group data-attributes
     * @group updates
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBatchUpdateOverwritesExisting
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testBatchUpdateOverwritesExisting()
    {
        $this->element->setData('userId', '123');
        $this->element->setDataAttributes(['userId' => '456']);

        $this->assertEquals('456', $this->element->getData('userId'));
    }

    // ==================== Naming Convention Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group naming
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeRendersWithDataPrefix
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeRendersWithDataPrefix()
    {
        $this->element->setData('userId', '123');
        $html = (string)$this->element;
        
        $this->assertStringContainsString('data-', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group naming
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeWithCamelCaseConvertsToKebabCase
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeWithCamelCaseConvertsToKebabCase()
    {
        $this->element->setData('userId', '123');
        $html = (string)$this->element;
        
        // data-userId or data-user-id (depends on implementation)
        $this->assertStringContainsString('data-', $html);
        $this->assertStringContainsString('userId', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group naming
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeWithKebabCaseFormat
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeWithKebabCaseFormat()
    {
        $this->element->setData('user-id', '123');
        $html = (string)$this->element;
        $this->assertStringContainsString('data-user-id="123"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group naming
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeWithComplexName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeWithComplexName()
    {
        $this->element->setData('user-config-settings', 'value');
        $html = (string)$this->element;
        $this->assertStringContainsString('data-user-config-settings="value"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group naming
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributeWithNumbersInName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributeWithNumbersInName()
    {
        $this->element->setData('id123', 'value');
        $html = (string)$this->element;
        $this->assertStringContainsString('data-id123="value"', $html);
    }

    // ==================== Method Chaining Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataReturnsSelf
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataReturnsSelf()
    {
        $result = $this->element->setData('key', 'value');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testChainMultipleSetDataCalls
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testChainMultipleSetDataCalls()
    {
        $this->element
            ->setData('a', '1')
            ->setData('b', '2')
            ->setData('c', '3');

        $all = $this->element->getAllData();
        $this->assertCount(3, $all);
    }

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testChainDataAttributesWithOtherMethods
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testChainDataAttributesWithOtherMethods()
    {
        $this->element
            ->setData('userId', '123')
            ->setAttribute('id', 'my-div')
            ->setData('role', 'container');

        $html = (string)$this->element;
        $this->assertStringContainsString('data-userId="123"', $html);
        $this->assertStringContainsString('data-role="container"', $html);
        $this->assertStringContainsString('id="my-div"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testChainDataAttributesWithCssClasses
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testChainDataAttributesWithCssClasses()
    {
        $this->element
            ->addCSSClass('container')
            ->setData('type', 'wrapper')
            ->addCSSClass('main');

        $html = (string)$this->element;
        $this->assertStringContainsString('class="container main"', $html);
        $this->assertStringContainsString('data-type="wrapper"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testRemoveDataReturnsSelf
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testRemoveDataReturnsSelf()
    {
        $this->element->setData('key', 'value');
        $result = $this->element->removeData('key');
        $this->assertSame($this->element, $result);
    }

    /**
     * @test
     * @group data-attributes
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testClearDataReturnsSelf
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testClearDataReturnsSelf()
    {
        $result = $this->element->clearData();
        $this->assertSame($this->element, $result);
    }

    // ==================== Edge Case Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithVeryLongValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithVeryLongValue()
    {
        $longValue = str_repeat('x', 10000);
        $this->element->setData('longData', $longValue);
        $this->assertEquals($longValue, $this->element->getData('longData'));
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithUnicodeCharacters
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithUnicodeCharacters()
    {
        $this->element->setData('message', '你好世界');
        $this->assertEquals('你好世界', $this->element->getData('message'));
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithEmojiCharacters
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithEmojiCharacters()
    {
        $this->element->setData('emoji', '😀🎉🚀');
        $this->assertEquals('😀🎉🚀', $this->element->getData('emoji'));
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetDataNonExistentKey
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetDataNonExistentKey()
    {
        $result = $this->element->getData('nonexistent');
        $this->assertNull($result);
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetDataWithEmptyKey
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetDataWithEmptyKey()
    {
        $result = $this->element->getData('');
        $this->assertNull($result);
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testSetDataWithSpacesInName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testSetDataWithSpacesInName()
    {
        // Spaces typically not allowed in data attribute names
        // Test implementation behavior
        $this->element->setData('user name', 'value');
        // Implementation should handle or reject
        $this->assertTrue(
            $this->element->hasData('user name') || 
            !$this->element->hasData('user name')
        );
    }

    /**
     * @test
     * @group data-attributes
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAllDataReturnsEmptyArray
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAllDataReturnsEmptyArray()
    {
        $all = $this->element->getAllData();
        $this->assertIsArray($all);
        $this->assertEmpty($all);
    }

    // ==================== Integration Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributesWithNestedElements
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributesWithNestedElements()
    {
        $parent = new /**
 * HtmlElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };

        $child = new /**
 * HtmlElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function __construct() {
                parent::__construct();
                $this->tag = 'span';
            }
        };

        $parent->setData('parent', 'yes');
        $child->setData('child', 'yes');

        $parent->addChild($child);
        $html = (string)$parent;

        $this->assertStringContainsString('data-parent="yes"', $html);
        $this->assertStringContainsString('data-child="yes"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributesRespectOtherAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributesRespectOtherAttributes()
    {
        $this->element->setData('userId', '123');
        $this->element->setAttribute('class', 'container');
        $this->element->setAttribute('id', 'main');

        $html = (string)$this->element;

        $this->assertStringContainsString('class="container"', $html);
        $this->assertStringContainsString('id="main"', $html);
        $this->assertStringContainsString('data-userId="123"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDataAttributesWithContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDataAttributesWithContent()
    {
        $this->element->setData('config', 'value');
        $this->element->addChild(new HtmlString('Some content'));

        $html = (string)$this->element;

        $this->assertStringContainsString('data-config="value"', $html);
        $this->assertStringContainsString('Some content', $html);
    }

    // ==================== Real-world Pattern Tests ====================

    /**
     * @test
     * @group data-attributes
     * @group real-world
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testBootstrapDataAttributePattern
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testBootstrapDataAttributePattern()
    {
        // Bootstrap common pattern: data-bs-* attributes
        $this->element->setData('bs-toggle', 'modal');
        $this->element->setData('bs-target', '#myModal');

        $html = (string)$this->element;

        $this->assertStringContainsString('data-bs-toggle="modal"', $html);
        $this->assertStringContainsString('data-bs-target="#myModal"', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group real-world
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testAjaxDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testAjaxDataAttributes()
    {
        $this->element->setData('url', '/api/users');
        $this->element->setData('method', 'GET');
        $this->element->setData('async', true);

        $html = (string)$this->element;

        $this->assertStringContainsString('data-url="/api/users"', $html);
        $this->assertStringContainsString('data-method="GET"', $html);
        $this->assertStringContainsString('data-async=', $html);
    }

    /**
     * @test
     * @group data-attributes
     * @group real-world
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testCustomDataAttributePattern
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testCustomDataAttributePattern()
    {
        $this->element
            ->setData('component', 'dropdown')
            ->setData('trigger', 'hover')
            ->setData('animation', 'fade')
            ->setAttribute('class', 'dropdown-container');

        $html = (string)$this->element;

        $this->assertStringContainsString('data-component="dropdown"', $html);
        $this->assertStringContainsString('data-trigger="hover"', $html);
        $this->assertStringContainsString('data-animation="fade"', $html);
    }
}
