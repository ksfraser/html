<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlFieldset;
use Ksfraser\HTML\Elements\HtmlLegend;

/**
 * Tests for HtmlFieldset
 *
 * HtmlFieldset renders <fieldset>...</fieldset>
 * Supports setDisabled() and addLegend(HtmlLegend)
 */
class HtmlFieldsetTest extends TestCase
{
    public function testDefaultConstructorRendersFieldset(): void
    {
        $fs = new HtmlFieldset();
        $this->assertStringContainsString('<fieldset', $fs->getHtml());
        $this->assertStringContainsString('</fieldset>', $fs->getHtml());
    }

    public function testSetDisabledAddsDisabledAttribute(): void
    {
        $fs = new HtmlFieldset();
        $fs->setDisabled();
        $this->assertStringContainsString('disabled', $fs->getHtml());
    }

    public function testSetDisabledIsFluentInterface(): void
    {
        $fs = new HtmlFieldset();
        $result = $fs->setDisabled();
        $this->assertSame($fs, $result);
    }

    public function testSetDisabledFalseRemovesAttribute(): void
    {
        $fs = new HtmlFieldset();
        $fs->setDisabled(true);
        $fs->setDisabled(false);
        $this->assertStringNotContainsString('disabled=', $fs->getHtml());
    }

    public function testAddLegendRendersLegendInside(): void
    {
        $fs = new HtmlFieldset();
        $legend = new HtmlLegend('Address');
        $fs->addLegend($legend);
        $this->assertStringContainsString('<legend', $fs->getHtml());
        $this->assertStringContainsString('Address', $fs->getHtml());
    }

    public function testAddLegendIsFluentInterface(): void
    {
        $fs = new HtmlFieldset();
        $result = $fs->addLegend(new HtmlLegend('x'));
        $this->assertSame($fs, $result);
    }

    public function testLegendAppearsInsideFieldset(): void
    {
        $fs = new HtmlFieldset();
        $fs->addLegend(new HtmlLegend('Group'));
        $html = $fs->getHtml();
        $this->assertMatchesRegularExpression('/<fieldset[^>]*>.*<legend[^>]*>Group<\/legend>.*<\/fieldset>/s', $html);
    }

    public function testFieldsetCanContainOtherElements(): void
    {
        $fs = new HtmlFieldset();
        $fs->addLegend(new HtmlLegend('Test'));
        $child = new \Ksfraser\HTML\HtmlElement('input');
        $fs->addNested($child);
        $html = $fs->getHtml();
        $this->assertStringContainsString('<input', $html);
    }
}
