<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlLabel;

/**
 * Tests for HtmlLabel
 *
 * HtmlLabel renders <label for="field">text</label>
 */
class HtmlLabelTest extends TestCase
{
    public function testDefaultConstructorRendersLabel(): void
    {
        $label = new HtmlLabel();
        $this->assertStringContainsString('<label', $label->getHtml());
        $this->assertStringContainsString('</label>', $label->getHtml());
    }

    public function testConstructorWithForAndText(): void
    {
        $label = new HtmlLabel('email', 'Email Address');
        $html = $label->getHtml();
        $this->assertStringContainsString('for="email"', $html);
        $this->assertStringContainsString('Email Address', $html);
    }

    public function testConstructorWithForOnly(): void
    {
        $label = new HtmlLabel('username');
        $html = $label->getHtml();
        $this->assertStringContainsString('for="username"', $html);
    }

    public function testConstructorWithTextOnly(): void
    {
        $label = new HtmlLabel(null, 'My Label');
        $html = $label->getHtml();
        $this->assertStringContainsString('My Label', $html);
        $this->assertStringNotContainsString('for=', $html);
    }

    public function testSetForIsFluentInterface(): void
    {
        $label = new HtmlLabel();
        $result = $label->setFor('myfield');
        $this->assertSame($label, $result);
    }

    public function testSetForSetsForAttribute(): void
    {
        $label = new HtmlLabel();
        $label->setFor('phone');
        $this->assertStringContainsString('for="phone"', $label->getHtml());
    }

    public function testSetTextSetsContent(): void
    {
        $label = new HtmlLabel();
        $label->setText('Phone Number');
        $this->assertStringContainsString('Phone Number', $label->getHtml());
    }

    public function testSetTextIsFluentInterface(): void
    {
        $label = new HtmlLabel();
        $result = $label->setText('x');
        $this->assertSame($label, $result);
    }

    public function testHtmlStructure(): void
    {
        $label = new HtmlLabel('name', 'Full Name');
        $this->assertMatchesRegularExpression('/<label[^>]+for="name"[^>]*>Full Name<\/label>/', $label->getHtml());
    }

    public function testTextIsEscaped(): void
    {
        $label = new HtmlLabel(null, '<script>alert(1)</script>');
        $html = $label->getHtml();
        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringContainsString('&lt;script&gt;', $html);
    }
}
