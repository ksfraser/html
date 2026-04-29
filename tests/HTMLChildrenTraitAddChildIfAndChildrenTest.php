<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HTMLChildrenTrait;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * Tests for HTMLChildrenTrait::addChildIf() and ::children()
 *
 * addChildIf(bool $condition, HtmlElementInterface $child)
 *   — conditionally adds a child
 *
 * children(array $items, callable $mapper): static
 *   — maps each item through $mapper and adds the result as a child
 */
class HTMLChildrenTraitAddChildIfAndChildrenTest extends TestCase
{
    /** Anonymous class that uses the trait */
    private object $host;

    protected function setUp(): void
    {
        $this->host = new class {
            use HTMLChildrenTrait;

            public function getHtml(): string
            {
                return $this->renderChildrenHtml();
            }
        };
    }

    // -----------------------------------------------------------------------
    // addChildIf
    // -----------------------------------------------------------------------

    public function testAddChildIfTrueAddsChild(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $child->method('getHtml')->willReturn('<span>x</span>');
        $child->method('toHtml')->willReturnCallback(fn() => print('<span>x</span>'));
        $this->host->addChildIf(true, $child);
        $this->assertCount(1, $this->host->getChildren());
    }

    public function testAddChildIfFalseDoesNotAddChild(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $this->host->addChildIf(false, $child);
        $this->assertCount(0, $this->host->getChildren());
    }

    public function testAddChildIfIsFluentInterface(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $result = $this->host->addChildIf(true, $child);
        $this->assertSame($this->host, $result);
    }

    public function testAddChildIfFalseIsFluentInterface(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $result = $this->host->addChildIf(false, $child);
        $this->assertSame($this->host, $result);
    }

    public function testAddChildIfTrueRendersChild(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $child->method('getHtml')->willReturn('<b>yes</b>');
        $this->host->addChildIf(true, $child);
        $this->assertStringContainsString('<b>yes</b>', $this->host->getHtml());
    }

    public function testAddChildIfFalseDoesNotRender(): void
    {
        $child = $this->createMock(HtmlElementInterface::class);
        $child->method('getHtml')->willReturn('<b>no</b>');
        $this->host->addChildIf(false, $child);
        $this->assertStringNotContainsString('<b>no</b>', $this->host->getHtml());
    }

    // -----------------------------------------------------------------------
    // children()
    // -----------------------------------------------------------------------

    public function testChildrenMapsArrayToChildren(): void
    {
        $this->host->children(['a', 'b', 'c'], function (string $item): HtmlElementInterface {
            return new HtmlString($item);
        });
        $this->assertCount(3, $this->host->getChildren());
    }

    public function testChildrenRendersAllMappedChildren(): void
    {
        $this->host->children([1, 2, 3], function (int $n): HtmlElementInterface {
            return new HtmlString("item{$n}");
        });
        $html = $this->host->getHtml();
        $this->assertStringContainsString('item1', $html);
        $this->assertStringContainsString('item2', $html);
        $this->assertStringContainsString('item3', $html);
    }

    public function testChildrenWithEmptyArrayAddsNoChildren(): void
    {
        $this->host->children([], function ($item): HtmlElementInterface {
            return new HtmlString($item);
        });
        $this->assertCount(0, $this->host->getChildren());
    }

    public function testChildrenIsFluentInterface(): void
    {
        $result = $this->host->children([], fn($x) => new HtmlString($x));
        $this->assertSame($this->host, $result);
    }

    public function testChildrenCanChainAfterAddChild(): void
    {
        $first = $this->createMock(HtmlElementInterface::class);
        $first->method('getHtml')->willReturn('<i>first</i>');
        $this->host->addChild($first);
        $this->host->children(['second'], fn($s) => new HtmlString($s));
        $this->assertCount(2, $this->host->getChildren());
    }
}
