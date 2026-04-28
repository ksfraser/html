<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSelectRange;

/**
 * Tests for HtmlSelectRange
 */
class HtmlSelectRangeTest extends TestCase
{
    public function testRendersSelectTag(): void
    {
        $sel = new HtmlSelectRange('num', 1, 3);
        $html = $sel->getHtml();
        $this->assertStringContainsString('<select', $html);
        $this->assertStringContainsString('name="num"', $html);
        $this->assertStringContainsString('</select>', $html);
    }

    public function testContainsCorrectNumberOfOptions(): void
    {
        $sel = new HtmlSelectRange('n', 5, 8);
        $this->assertCount(4, $sel->getOptions());
    }

    public function testOptionLabelsMatchValues(): void
    {
        $sel = new HtmlSelectRange('n', 1, 3);
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="1">1</option>', $html);
        $this->assertStringContainsString('<option value="2">2</option>', $html);
        $this->assertStringContainsString('<option value="3">3</option>', $html);
    }

    public function testSelectedOptionIsMarked(): void
    {
        $sel = new HtmlSelectRange('n', 1, 5, 3);
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="3" selected>', $html);
        // Others not selected
        $this->assertStringNotContainsString('<option value="1" selected>', $html);
        $this->assertStringNotContainsString('<option value="5" selected>', $html);
    }

    public function testNoSelectedWhenNullPassed(): void
    {
        $sel = new HtmlSelectRange('n', 1, 3, null);
        $html = $sel->getHtml();
        $this->assertStringNotContainsString('selected', $html);
    }

    public function testReversedMinMaxIsHandled(): void
    {
        // min > max should be swapped silently
        $sel = new HtmlSelectRange('n', 5, 1);
        $this->assertCount(5, $sel->getOptions());
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="1">', $html);
        $this->assertStringContainsString('<option value="5">', $html);
    }

    public function testSingleValueRange(): void
    {
        $sel = new HtmlSelectRange('n', 7, 7, 7);
        $this->assertCount(1, $sel->getOptions());
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="7" selected>', $html);
    }
}
