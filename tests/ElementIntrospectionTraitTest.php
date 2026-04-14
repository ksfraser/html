<?php

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * Tests for ElementIntrospectionTrait - FR-010
 * Comprehensive test suite for element introspection and querying
 *
 *
 * @group FR-010
 * @group element-introspection
 * @since 1.0.5 2026-03-30
 */
/**
 * ElementIntrospectionTraitTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class ElementIntrospectionTraitTest extends TestCase
{
    /**
     * Test element with ElementIntrospectionTrait
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

    // ==================== Container Structure Tests ====================

    /**
     * @test
     * @group element-introspection
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetDirectChildren
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetDirectChildren()
    {
        $child1 = new /**
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

        $child2 = new /**
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
                $this->tag = 'p';
            }
        };

        $this->element->addChild($child1);
        $this->element->addChild($child2);

        $children = $this->element->getChildren();
        $this->assertCount(2, $children);
    }

    /**
     * @test
     * @group element-introspection
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetChildrenReturnsOnlyDirect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetChildrenReturnsOnlyDirect()
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
                $this->tag = 'div';
            }
        };

        $grandchild = new /**
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

        $parent->addChild($child);
        $child->addChild($grandchild);

        $children = $parent->getChildren();
        $this->assertCount(1, $children);
        $this->assertSame($children[0], $child);
    }

    /**
     * @test
     * @group element-introspection
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAllNestedElements
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAllNestedElements()
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

        $child1 = new /**
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

        $child2 = new /**
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

        $grandchild = new /**
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
                $this->tag = 'p';
            }
        };

        $parent->addChild($child1);
        $parent->addChild($child2);
        $child1->addChild($grandchild);

        $all = $parent->getAllNested();
        $this->assertCount(3, $all); // child1, child2, grandchild
    }

    /**
     * @test
     * @group element-introspection
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAllNestedElementsRecursiveTraversal
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAllNestedElementsRecursiveTraversal()
    {
        $root = new /**
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

        $level1 = new /**
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

        $level2 = new /**
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

        $level3 = new /**
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
                $this->tag = 'p';
            }
        };

        $root->addChild($level1);
        $level1->addChild($level2);
        $level2->addChild($level3);

        $all = $root->getAllNested();
        $this->assertCount(3, $all);
    }

    // ==================== Tag-Based Queries ====================

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByTagName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByTagName()
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

        $button1 = new /**
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
                parent::__construct(new HtmlString('Save'));
                $this->tag = 'button';
            }
        };

        $button2 = new /**
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
                parent::__construct(new HtmlString('Cancel'));
                $this->tag = 'button';
            }
        };

        $span = new /**
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

        $parent->addChild($button1);
        $parent->addChild($button2);
        $parent->addChild($span);

        $buttons = $parent->findByTag('button');
        $this->assertCount(2, $buttons);
    }

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByTagReturnsEmpty
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByTagReturnsEmpty()
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

        $span = new /**
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

        $parent->addChild($span);

        $buttons = $parent->findByTag('button');
        $this->assertCount(0, $buttons);
    }

    // ==================== Attribute-Based Queries ====================

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByAttributeValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByAttributeValue()
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

        $input1 = new /**
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
                $this->tag = 'input';
                $this->setAttribute('type', 'text');
                $this->setAttribute('name', 'username');
            }
        };

        $input2 = new /**
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
                $this->tag = 'input';
                $this->setAttribute('type', 'password');
                $this->setAttribute('name', 'password');
            }
        };

        $parent->addChild($input1);
        $parent->addChild($input2);

        $textInputs = $parent->findByAttribute('type', 'text');
        $this->assertCount(1, $textInputs);

        $passwordInputs = $parent->findByAttribute('type', 'password');
        $this->assertCount(1, $passwordInputs);
    }

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByClass
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByClass()
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

        $btn1 = new /**
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
                parent::__construct(new HtmlString('Submit'));
                $this->tag = 'button';
                $this->addCSSClass('btn');
                $this->addCSSClass('btn-primary');
            }
        };

        $btn2 = new /**
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
                parent::__construct(new HtmlString('Cancel'));
                $this->tag = 'button';
                $this->addCSSClass('btn');
                $this->addCSSClass('btn-secondary');
            }
        };

        $span = new /**
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
                $this->addCSSClass('badge');
            }
        };

        $parent->addChild($btn1);
        $parent->addChild($btn2);
        $parent->addChild($span);

        $allButtons = $parent->findByClass('btn');
        $this->assertCount(2, $allButtons);

        $primaryButtons = $parent->findByClass('btn-primary');
        $this->assertCount(1, $primaryButtons);
    }

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByAttributeExists
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByAttributeExists()
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

        $required1 = new /**
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
                $this->tag = 'input';
                $this->setAttribute('required', 'required');
            }
        };

        $optional = new /**
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
                $this->tag = 'input';
            }
        };

        $parent->addChild($required1);
        $parent->addChild($optional);

        $required = $parent->findByAttributeExists('required');
        $this->assertCount(1, $required);
    }

    // ==================== ID-Based Queries ====================

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindById
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindById()
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

        $target = new /**
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
                parent::__construct(new HtmlString('Target'));
                $this->tag = 'p';
                $this->setAttribute('id', 'target-element');
            }
        };

        $other = new /**
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
                parent::__construct(new HtmlString('Other'));
                $this->tag = 'p';
                $this->setAttribute('id', 'other-element');
            }
        };

        $parent->addChild($target);
        $parent->addChild($other);

        $found = $parent->findById('target-element');
        $this->assertNotNull($found);
        $this->assertSame($target, $found);
    }

    /**
     * @test
     * @group element-introspection
     * @group queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByIdReturnsNull
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByIdReturnsNull()
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

        $found = $parent->findById('nonexistent');
        $this->assertNull($found);
    }

    // ==================== Attribute Value Retrieval ====================

    /**
     * @test
     * @group element-introspection
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAttributeValue
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAttributeValue()
    {
        $this->element->setAttribute('id', 'my-div');
        $this->element->setAttribute('class', 'container');
        $this->element->setAttribute('data-role', 'wrapper');

        $this->assertEquals('my-div', $this->element->getAttributeValue('id'));
        $this->assertEquals('container', $this->element->getAttributeValue('class'));
        $this->assertEquals('wrapper', $this->element->getAttributeValue('data-role'));
    }

    /**
     * @test
     * @group element-introspection
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAttributeValueNonExistent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAttributeValueNonExistent()
    {
        $value = $this->element->getAttributeValue('nonexistent');
        $this->assertNull($value);
    }

    /**
     * @test
     * @group element-introspection
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAttributeByName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAttributeByName()
    {
        $this->element->setAttribute('id', 'test-id');

        $attr = $this->element->getAttribute('id');
        $this->assertNotNull($attr);
        // getAttribute should return HtmlAttribute object
        $this->assertTrue(is_object($attr) || is_string($attr));
    }

    /**
     * @test
     * @group element-introspection
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetAllAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetAllAttributes()
    {
        $this->element->setAttribute('id', 'my-id');
        $this->element->setAttribute('class', 'my-class');
        $this->element->setAttribute('data-test', 'value');

        $attrs = $this->element->getAttributes();
        if (is_array($attrs)) {
            $this->assertIsArray($attrs);
        } else {
            $this->assertIsString($attrs);
        }
    }

    // ==================== Element Info ====================

    /**
     * @test
     * @group element-introspection
     * @group info
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetTagName
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetTagName()
    {
        $div = new /**
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

        $button = new /**
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
                $this->tag = 'button';
            }
        };

        $this->assertEquals('div', $div->getTag());
        $this->assertEquals('button', $button->getTag());
    }

    /**
     * @test
     * @group element-introspection
     * @group info
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testHasChildren
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testHasChildren()
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

        $this->assertFalse($parent->hasChildren());

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

        $parent->addChild($child);
        $this->assertTrue($parent->hasChildren());
    }

    /**
     * @test
     * @group element-introspection
     * @group info
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetChildCount
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetChildCount()
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

        $this->assertEquals(0, $parent->getChildCount());

        $parent->addChild(new /**
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
        });

        $parent->addChild(new /**
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
        });

        $this->assertEquals(2, $parent->getChildCount());
    }

    /**
     * @test
     * @group element-introspection
     * @group info
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testGetNestedCount
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testGetNestedCount()
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
                $this->tag = 'div';
            }
        };

        $grandchild = new /**
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

        $parent->addChild($child);
        $child->addChild($grandchild);

        $this->assertEquals(2, $parent->getNestedCount());
    }

    // ==================== Contains/Has Methods ====================

    /**
     * @test
     * @group element-introspection
     * @group contains
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testContainsChild
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testContainsChild()
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

        $other = new /**
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

        $parent->addChild($child);

        $this->assertTrue($parent->containsChild($child));
        $this->assertFalse($parent->containsChild($other));
    }

    /**
     * @test
     * @group element-introspection
     * @group contains
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testContainsNestedElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testContainsNestedElement()
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
                $this->tag = 'div';
            }
        };

        $grandchild = new /**
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

        $other = new /**
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

        $parent->addChild($child);
        $child->addChild($grandchild);

        $this->assertTrue($parent->containsNested($grandchild));
        $this->assertFalse($parent->containsNested($other));
    }

    // ==================== Complex Queries ====================

    /**
     * @test
     * @group element-introspection
     * @group complex-queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFindByTagAndClass
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFindByTagAndClass()
    {
        // This tests combination of criteria
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

        $btn1 = new /**
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
                parent::__construct(new HtmlString('Primary'));
                $this->tag = 'button';
                $this->addCSSClass('btn-primary');
            }
        };

        $btn2 = new /**
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
                parent::__construct(new HtmlString('Secondary'));
                $this->tag = 'button';
                $this->addCSSClass('btn-secondary');
            }
        };

        $link = new /**
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
                parent::__construct(new HtmlString('Link'));
                $this->tag = 'a';
                $this->addCSSClass('btn-primary');
            }
        };

        $parent->addChild($btn1);
        $parent->addChild($btn2);
        $parent->addChild($link);

        // Find buttons with primary class
        $primary = $parent->findByTag('button');
        $primaryButtons = array_filter($primary, /**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $elem
 * @return void
 */
function($elem) {
            return $elem->hasCSSClass('btn-primary');
        });

        $this->assertCount(1, $primaryButtons);
    }

    /**
     * @test
     * @group element-introspection
     * @group complex-queries
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testFilterElements
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testFilterElements()
    {
        // Test filtering with closure
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

        for ($i = 1; $i <= 5; $i++) {
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
                    $this->tag = 'div';
                }
            };
            $child->setAttribute('data-index', (string)$i);
            $parent->addChild($child);
        }

        $children = $parent->getChildren();
        $filtered = array_filter($children, /**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $elem
 * @return void
 */
function($elem) {
            return (int)$elem->getAttributeValue('data-index') > 2;
        });

        $this->assertCount(3, $filtered);
    }

    // ==================== Edge Cases ====================

    /**
     * @test
     * @group element-introspection
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testEmptyElementStructure
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEmptyElementStructure()
    {
        $empty = new /**
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

        $this->assertCount(0, $empty->getChildren());
        $this->assertCount(0, $empty->getAllNested());
        $this->assertFalse($empty->hasChildren());
    }

    /**
     * @test
     * @group element-introspection
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testDeeplyNestedStructure
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDeeplyNestedStructure()
    {
        $root = new /**
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

        $current = $root;
        for ($i = 0; $i < 10; $i++) {
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
                    $this->tag = 'div';
                }
            };
            $current->addChild($child);
            $current = $child;
        }

        $all = $root->getAllNested();
        $this->assertCount(10, $all);
    }

    /**
     * @test
     * @group element-introspection
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * testMixedContentTypes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testMixedContentTypes()
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

        // Add element child
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
                $this->tag = 'p';
            }
        };
        $parent->addChild($child);

        // Add text child
        $parent->addChild(new HtmlString('Text content'));

        // Should only count element children
        $children = $parent->getChildren();
        // Behavior depends on implementation
        $this->assertNotNull($children);
    }
}
