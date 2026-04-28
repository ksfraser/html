<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSelectMonth;

/**
 * Tests for HtmlSelectMonth
 */
class HtmlSelectMonthTest extends TestCase
{
    public function testRendersSelectTag(): void
    {
        $sel = new HtmlSelectMonth('month');
        $html = $sel->getHtml();
        $this->assertStringContainsString('<select', $html);
        $this->assertStringContainsString('name="month"', $html);
        $this->assertStringContainsString('</select>', $html);
    }

    public function testHasTwelveOptions(): void
    {
        $sel = new HtmlSelectMonth('month');
        $this->assertCount(12, $sel->getOptions());
    }

    public function testFirstOptionIsJanuary(): void
    {
        $sel = new HtmlSelectMonth('month');
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="01">January</option>', $html);
    }

    public function testLastOptionIsDecember(): void
    {
        $sel = new HtmlSelectMonth('month');
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="12">December</option>', $html);
    }

    public function testAllMonthNamesPresent(): void
    {
        $months = [
            '01' => 'January',  '02' => 'February', '03' => 'March',
            '04' => 'April',    '05' => 'May',       '06' => 'June',
            '07' => 'July',     '08' => 'August',    '09' => 'September',
            '10' => 'October',  '11' => 'November',  '12' => 'December',
        ];
        $sel = new HtmlSelectMonth('month');
        $html = $sel->getHtml();
        foreach ($months as $val => $label) {
            $this->assertStringContainsString(
                '<option value="' . $val . '">' . $label . '</option>',
                $html,
                "Month $val/$label missing"
            );
        }
    }

    public function testSelectedMonthIsMarked(): void
    {
        $sel = new HtmlSelectMonth('month', '04');
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="04" selected>April</option>', $html);
        // Others not selected
        $this->assertStringNotContainsString('<option value="01" selected>', $html);
        $this->assertStringNotContainsString('<option value="12" selected>', $html);
    }

    public function testNoSelectedWhenNullPassed(): void
    {
        $sel = new HtmlSelectMonth('month', null);
        $html = $sel->getHtml();
        $this->assertStringNotContainsString('selected', $html);
    }

    public function testNameAttribute(): void
    {
        $sel = new HtmlSelectMonth('birth_month');
        $this->assertStringContainsString('name="birth_month"', $sel->getHtml());
    }
}
