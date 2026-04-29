<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlProgress;

/**
 * Tests for HtmlProgress (full implementation)
 *
 * HtmlProgress renders <progress value="50" max="100"></progress>
 */
class HtmlProgressTest extends TestCase
{
    public function testDefaultConstructorRendersProgress(): void
    {
        $p = new HtmlProgress();
        $this->assertStringContainsString('<progress', $p->getHtml());
        $this->assertStringContainsString('</progress>', $p->getHtml());
    }

    public function testConstructorWithValueAndMax(): void
    {
        $p = new HtmlProgress(50.0, 100.0);
        $html = $p->getHtml();
        $this->assertStringContainsString('value="50"', $html);
        $this->assertStringContainsString('max="100"', $html);
    }

    public function testSetValueSetsAttribute(): void
    {
        $p = new HtmlProgress();
        $p->setValue(75.0);
        $this->assertStringContainsString('value="75"', $p->getHtml());
    }

    public function testSetMaxSetsAttribute(): void
    {
        $p = new HtmlProgress();
        $p->setMax(200.0);
        $this->assertStringContainsString('max="200"', $p->getHtml());
    }

    public function testSetValueIsFluentInterface(): void
    {
        $p = new HtmlProgress();
        $result = $p->setValue(10.0);
        $this->assertSame($p, $result);
    }

    public function testSetMaxIsFluentInterface(): void
    {
        $p = new HtmlProgress();
        $result = $p->setMax(100.0);
        $this->assertSame($p, $result);
    }

    public function testConstructorValueOnlyNoMax(): void
    {
        $p = new HtmlProgress(33.0);
        $html = $p->getHtml();
        $this->assertStringContainsString('value="33"', $html);
        $this->assertStringNotContainsString('max=', $html);
    }

    public function testDecimalValues(): void
    {
        $p = new HtmlProgress(0.5, 1.0);
        $html = $p->getHtml();
        $this->assertStringContainsString('value="0.5"', $html);
        $this->assertStringContainsString('max="1"', $html);
    }

    public function testNoValueNoMax(): void
    {
        $p = new HtmlProgress();
        $html = $p->getHtml();
        $this->assertStringNotContainsString('value=', $html);
        $this->assertStringNotContainsString('max=', $html);
    }

    public function testToHtmlOutputsHtml(): void
    {
        $p = new HtmlProgress(50.0, 100.0);
        ob_start();
        $p->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<progress', $output);
        $this->assertStringContainsString('</progress>', $output);
    }
}
