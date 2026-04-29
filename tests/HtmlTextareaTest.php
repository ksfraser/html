<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlTextarea;

/**
 * Tests for HtmlTextarea
 */
class HtmlTextareaTest extends TestCase
{
    public function testRendersTextareaTag(): void
    {
        $ta = new HtmlTextarea();
        $html = $ta->getHtml();
        $this->assertStringStartsWith('<textarea', $html);
        $this->assertStringContainsString('</textarea>', $html);
    }

    public function testNameAttributeViaConstructor(): void
    {
        $ta = new HtmlTextarea('bio');
        $this->assertStringContainsString('name="bio"', $ta->getHtml());
    }

    public function testValueViaConstructor(): void
    {
        $ta = new HtmlTextarea('bio', 'Hello world');
        $this->assertStringContainsString('Hello world', $ta->getHtml());
    }

    public function testSetName(): void
    {
        $ta = new HtmlTextarea();
        $ta->setName('notes');
        $this->assertStringContainsString('name="notes"', $ta->getHtml());
    }

    public function testSetValue(): void
    {
        $ta = new HtmlTextarea();
        $ta->setName('x')->setValue('Some text');
        $html = $ta->getHtml();
        $this->assertStringContainsString('Some text', $html);
    }

    public function testSetValueEscapesHtml(): void
    {
        $ta = new HtmlTextarea('msg');
        $ta->setValue('<script>alert(1)</script>');
        $html = $ta->getHtml();
        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringContainsString('&lt;script&gt;', $html);
    }

    public function testSetRows(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setRows(5);
        $this->assertStringContainsString('rows="5"', $ta->getHtml());
    }

    public function testSetCols(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setCols(40);
        $this->assertStringContainsString('cols="40"', $ta->getHtml());
    }

    public function testSetPlaceholder(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setPlaceholder('Enter text here');
        $this->assertStringContainsString('placeholder="Enter text here"', $ta->getHtml());
    }

    public function testSetMaxlength(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setMaxlength(200);
        $this->assertStringContainsString('maxlength="200"', $ta->getHtml());
    }

    public function testSetDisabled(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setDisabled(true);
        $this->assertStringContainsString('disabled="disabled"', $ta->getHtml());
    }

    public function testSetDisabledFalseDoesNotAddAttribute(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setDisabled(false);
        $this->assertStringNotContainsString('disabled', $ta->getHtml());
    }

    public function testSetRequired(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setRequired(true);
        $this->assertStringContainsString('required="required"', $ta->getHtml());
    }

    public function testSetReadonly(): void
    {
        $ta = new HtmlTextarea('t');
        $ta->setReadonly(true);
        $this->assertStringContainsString('readonly="readonly"', $ta->getHtml());
    }

    public function testFluentChaining(): void
    {
        $ta = (new HtmlTextarea())
            ->setName('comment')
            ->setValue('Hi!')
            ->setRows(3)
            ->setCols(60)
            ->setPlaceholder('Write something')
            ->setMaxlength(500);

        $html = $ta->getHtml();
        $this->assertStringContainsString('name="comment"', $html);
        $this->assertStringContainsString('rows="3"', $html);
        $this->assertStringContainsString('cols="60"', $html);
        $this->assertStringContainsString('placeholder="Write something"', $html);
        $this->assertStringContainsString('maxlength="500"', $html);
        $this->assertStringContainsString('Hi!', $html);
    }
}
