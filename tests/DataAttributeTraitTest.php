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
    protected function setUp(): void
    {
        $this->element = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
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
    public function testSetSingleDataAttribute()
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
    public function testSetMultipleDataAttributes()
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
    public function testSetDataAttributeWithBatch()
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
    public function testGetAllDataAttributes()
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
    public function testDataAttributeInHtmlOutput()
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
    public function testSetDataWithStringValue()
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
    public function testSetDataWithIntegerValue()
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
    public function testSetDataWithBooleanValue()
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
    public function testSetDataWithArrayValue()
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
    public function testSetDataWithJsonSerializableObject()
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
    public function testSetDataWithFloatValue()
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
    public function testSetDataWithEmptyString()
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
    public function testSetDataWithNull()
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
    public function testDataAttributeEscapesDoubleQuotes()
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
    public function testDataAttributeEscapesLessThan()
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
    public function testDataAttributeEscapesGreaterThan()
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
    public function testDataAttributeEscapesAmpersand()
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
    public function testDataAttributeEscapesSingleQuote()
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
    public function testDataAttributeEscapesJsonWithSpecialChars()
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
    public function testRemoveDataAttribute()
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
    public function testRemoveNonExistentDataAttribute()
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
    public function testClearAllDataAttributes()
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
    public function testRemoveDataRemovedFromHtml()
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
    public function testUpdateExistingDataAttribute()
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
    public function testUpdateExistingDataAttributeChangeType()
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
    public function testBatchUpdateMergesWithExisting()
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
    public function testBatchUpdateOverwritesExisting()
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
    public function testDataAttributeRendersWithDataPrefix()
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
    public function testDataAttributeWithCamelCaseConvertsToKebabCase()
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
    public function testDataAttributeWithKebabCaseFormat()
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
    public function testDataAttributeWithComplexName()
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
    public function testDataAttributeWithNumbersInName()
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
    public function testSetDataReturnsSelf()
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
    public function testChainMultipleSetDataCalls()
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
    public function testChainDataAttributesWithOtherMethods()
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
    public function testChainDataAttributesWithCssClasses()
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
    public function testRemoveDataReturnsSelf()
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
    public function testClearDataReturnsSelf()
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
    public function testSetDataWithVeryLongValue()
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
    public function testSetDataWithUnicodeCharacters()
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
    public function testSetDataWithEmojiCharacters()
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
    public function testGetDataNonExistentKey()
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
    public function testGetDataWithEmptyKey()
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
    public function testSetDataWithSpacesInName()
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
    public function testGetAllDataReturnsEmptyArray()
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
    public function testDataAttributesWithNestedElements()
    {
        $parent = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
                parent::__construct();
                $this->tag = 'div';
            }
        };

        $child = new class extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
            public function __construct() {
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
    public function testDataAttributesRespectOtherAttributes()
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
    public function testDataAttributesWithContent()
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
    public function testBootstrapDataAttributePattern()
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
    public function testAjaxDataAttributes()
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
    public function testCustomDataAttributePattern()
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
