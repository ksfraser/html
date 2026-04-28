<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HTMLChildrenTrait;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlSpan;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * Tests for HTMLChildrenTrait::prependChild()
 */
class HTMLChildrenTraitPrependTest extends TestCase
{
    public function testPrependChildBeforeExistingChildren(): void
    {
        // Use HtmlElement (which uses HtmlElement's nested[], not HTMLChildrenTrait's $children)
        // So we test via a mock object of the trait directly.
        $trait = $this->getMockForTrait(HTMLChildrenTrait::class);

        $first  = $this->createMock(HtmlElementInterface::class);
        $second = $this->createMock(HtmlElementInterface::class);

        $trait->addChild($second);        // Add second first
        $trait->prependChild($first);     // Prepend first

        $children = $trait->getChildren();
        $this->assertCount(2, $children);
        $this->assertSame($first, $children[0]);
        $this->assertSame($second, $children[1]);
    }

    public function testPrependChildOnEmpty(): void
    {
        $trait = $this->getMockForTrait(HTMLChildrenTrait::class);
        $child = $this->createMock(HtmlElementInterface::class);

        $trait->prependChild($child);

        $children = $trait->getChildren();
        $this->assertCount(1, $children);
        $this->assertSame($child, $children[0]);
    }

    public function testPrependMultiplePreservesOrder(): void
    {
        $trait = $this->getMockForTrait(HTMLChildrenTrait::class);

        $a = $this->createMock(HtmlElementInterface::class);
        $b = $this->createMock(HtmlElementInterface::class);
        $c = $this->createMock(HtmlElementInterface::class);

        $trait->addChild($c);    // [c]
        $trait->prependChild($b); // [b, c]
        $trait->prependChild($a); // [a, b, c]

        $children = $trait->getChildren();
        $this->assertSame($a, $children[0]);
        $this->assertSame($b, $children[1]);
        $this->assertSame($c, $children[2]);
    }

    public function testPrependReturnsSelf(): void
    {
        $trait = $this->getMockForTrait(HTMLChildrenTrait::class);
        $child = $this->createMock(HtmlElementInterface::class);

        $result = $trait->prependChild($child);
        $this->assertSame($trait, $result);
    }
}
