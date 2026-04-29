<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMeter;

/**
 * Tests for HtmlMeter (full implementation)
 *
 * HtmlMeter renders <meter value="..." min="..." max="..."></meter>
 */
class HtmlMeterTest extends TestCase
{
    public function testDefaultConstructorRendersMeter(): void
    {
        $m = new HtmlMeter();
        $this->assertStringContainsString('<meter', $m->getHtml());
        $this->assertStringContainsString('</meter>', $m->getHtml());
    }

    public function testConstructorWithValueMinMax(): void
    {
        $m = new HtmlMeter(30.0, 0.0, 100.0);
        $html = $m->getHtml();
        $this->assertStringContainsString('value="30"', $html);
        $this->assertStringContainsString('min="0"', $html);
        $this->assertStringContainsString('max="100"', $html);
    }

    public function testSetValueIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setValue(50.0);
        $this->assertSame($m, $result);
    }

    public function testSetMinIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setMin(0.0);
        $this->assertSame($m, $result);
    }

    public function testSetMaxIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setMax(100.0);
        $this->assertSame($m, $result);
    }

    public function testSetLowIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setLow(20.0);
        $this->assertSame($m, $result);
    }

    public function testSetHighIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setHigh(80.0);
        $this->assertSame($m, $result);
    }

    public function testSetOptimumIsFluentInterface(): void
    {
        $m = new HtmlMeter();
        $result = $m->setOptimum(60.0);
        $this->assertSame($m, $result);
    }

    public function testSetValueSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setValue(42.0);
        $this->assertStringContainsString('value="42"', $m->getHtml());
    }

    public function testSetMinSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setMin(5.0);
        $this->assertStringContainsString('min="5"', $m->getHtml());
    }

    public function testSetMaxSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setMax(200.0);
        $this->assertStringContainsString('max="200"', $m->getHtml());
    }

    public function testSetLowSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setLow(25.0);
        $this->assertStringContainsString('low="25"', $m->getHtml());
    }

    public function testSetHighSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setHigh(75.0);
        $this->assertStringContainsString('high="75"', $m->getHtml());
    }

    public function testSetOptimumSetsAttribute(): void
    {
        $m = new HtmlMeter();
        $m->setOptimum(60.0);
        $this->assertStringContainsString('optimum="60"', $m->getHtml());
    }

    public function testAllAttributesTogether(): void
    {
        $m = new HtmlMeter(60.0, 0.0, 100.0);
        $m->setLow(25.0)->setHigh(75.0)->setOptimum(50.0);
        $html = $m->getHtml();
        $this->assertStringContainsString('value="60"', $html);
        $this->assertStringContainsString('min="0"', $html);
        $this->assertStringContainsString('max="100"', $html);
        $this->assertStringContainsString('low="25"', $html);
        $this->assertStringContainsString('high="75"', $html);
        $this->assertStringContainsString('optimum="50"', $html);
    }

    public function testNoAttributesWhenNoneSet(): void
    {
        $m = new HtmlMeter();
        $html = $m->getHtml();
        $this->assertStringNotContainsString('value=', $html);
        $this->assertStringNotContainsString('min=', $html);
        $this->assertStringNotContainsString('max=', $html);
    }

    public function testToHtmlOutputsHtml(): void
    {
        $m = new HtmlMeter(50.0, 0.0, 100.0);
        ob_start();
        $m->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<meter', $output);
        $this->assertStringContainsString('</meter>', $output);
    }
}
