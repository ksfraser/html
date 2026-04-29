<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlLegend;

/**
 * Tests for HtmlLegend
 *
 * HtmlLegend renders <legend>text</legend>
 */
class HtmlLegendTest extends TestCase
{
    public function testDefaultConstructorRendersLegend(): void
    {
        $legend = new HtmlLegend();
        $this->assertStringContainsString('<legend', $legend->getHtml());
        $this->assertStringContainsString('</legend>', $legend->getHtml());
    }

    public function testConstructorWithText(): void
    {
        $legend = new HtmlLegend('Personal Info');
        $this->assertStringContainsString('Personal Info', $legend->getHtml());
    }

    public function testConstructorNullText(): void
    {
        $legend = new HtmlLegend(null);
        $html = $legend->getHtml();
        $this->assertStringContainsString('<legend', $html);
    }

    public function testSetTextIsFluentInterface(): void
    {
        $legend = new HtmlLegend();
        $result = $legend->setText('Contact');
        $this->assertSame($legend, $result);
    }

    public function testSetTextUpdatesContent(): void
    {
        $legend = new HtmlLegend();
        $legend->setText('Shipping');
        $this->assertStringContainsString('Shipping', $legend->getHtml());
    }

    public function testTextIsEscaped(): void
    {
        $legend = new HtmlLegend('<b>hack</b>');
        $html = $legend->getHtml();
        $this->assertStringNotContainsString('<b>', $html);
        $this->assertStringContainsString('&lt;b&gt;', $html);
    }

    public function testRendersCorrectTag(): void
    {
        $legend = new HtmlLegend('Title');
        $this->assertMatchesRegularExpression('/<legend[^>]*>Title<\/legend>/', $legend->getHtml());
    }
}
