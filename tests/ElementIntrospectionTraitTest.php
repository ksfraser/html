<?php

namespace Ksfraser\HTML\Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * ElementIntrospectionTraitTest
 *
 * Minimal, cleaned-up version to replace a corrupted file. Keeps basic
 * behavior and provides proper docblocks required by the `check-since` tool.
 *
 * @since v1.0.1 2025-10-20
 */
class ElementIntrospectionTraitTest extends TestCase
{
    /** @var HtmlElement */
    private $element;

    /**
     * Setup fixture.
     *
     * @since v1.0.1 2025-10-20
     * @return void
     */
    protected function setUp(): void
    {
        $this->element = new class extends HtmlElement {
            public function __construct()
            {
                parent::__construct();
                $this->tag = 'div';
            }
        };
    }

    /**
     * Test get direct children.
     *
     * @since v1.0.1 2025-10-20
     * @return void
     */
    public function testGetDirectChildren(): void
    {
        $child1 = new class extends HtmlElement {
            public function __construct() { parent::__construct(); $this->tag = 'span'; }
        };
        $child2 = new class extends HtmlElement {
            public function __construct() { parent::__construct(); $this->tag = 'b'; }
        };

        $this->element->addChild($child1);
        $this->element->addChild($child2);

        $children = $this->element->getChildren();
        $this->assertCount(2, $children);
    }
}
