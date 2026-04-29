<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSelectYear;

/**
 * Tests for HtmlSelectYear
 *
 * HtmlSelectYear extends HtmlSelect and auto-populates options for a year range.
 */
class HtmlSelectYearTest extends TestCase
{
    public function testRendersSelectTag(): void
    {
        $sel = new HtmlSelectYear('year', 2020, 2025);
        $this->assertStringContainsString('<select', $sel->getHtml());
        $this->assertStringContainsString('</select>', $sel->getHtml());
    }

    public function testRendersCorrectNumberOfOptions(): void
    {
        $sel = new HtmlSelectYear('year', 2020, 2025);
        $html = $sel->getHtml();
        // 2020,2021,2022,2023,2024,2025 = 6 options
        $this->assertSame(6, substr_count($html, '<option'));
    }

    public function testRendersAllYearValues(): void
    {
        $sel = new HtmlSelectYear('year', 2021, 2023);
        $html = $sel->getHtml();
        $this->assertStringContainsString('value="2021"', $html);
        $this->assertStringContainsString('value="2022"', $html);
        $this->assertStringContainsString('value="2023"', $html);
    }

    public function testSelectedYearIsMarked(): void
    {
        $sel = new HtmlSelectYear('year', 2020, 2025, 2022);
        $html = $sel->getHtml();
        // The selected option should contain both value="2022" and selected
        $this->assertMatchesRegularExpression('/value="2022"[^>]*selected|selected[^>]*value="2022"/', $html);
    }

    public function testNoSelectedWhenNullPassed(): void
    {
        $sel = new HtmlSelectYear('year', 2020, 2022, null);
        $html = $sel->getHtml();
        $this->assertStringNotContainsString('selected', $html);
    }

    public function testNameAttributeIsSet(): void
    {
        $sel = new HtmlSelectYear('birth_year', 2000, 2005);
        $html = $sel->getHtml();
        $this->assertStringContainsString('birth_year', $html);
    }

    public function testSingleYearRange(): void
    {
        $sel = new HtmlSelectYear('year', 2024, 2024);
        $html = $sel->getHtml();
        $this->assertSame(1, substr_count($html, '<option'));
        $this->assertStringContainsString('value="2024"', $html);
    }
}
