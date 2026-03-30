<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\FAButtons\DeleteFrequencyActionButton;
use Ksfraser\HTML\FAButtons\DeleteTypeActionButton;
use Ksfraser\HTML\FAButtons\EditFrequencyActionButton;
use Ksfraser\HTML\FAButtons\EditLoanActionButton;
use Ksfraser\HTML\FAButtons\EditTypeActionButton;
use Ksfraser\HTML\FAButtons\ViewLoanActionButton;

class FAButtonsTest extends TestCase
{
    public function testDeleteFrequencyActionButton()
    {
        $btn = new DeleteFrequencyActionButton();
        $this->assertInstanceOf(DeleteFrequencyActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
    public function testDeleteTypeActionButton()
    {
        $btn = new DeleteTypeActionButton();
        $this->assertInstanceOf(DeleteTypeActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
    public function testEditFrequencyActionButton()
    {
        $btn = new EditFrequencyActionButton();
        $this->assertInstanceOf(EditFrequencyActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
    public function testEditLoanActionButton()
    {
        $btn = new EditLoanActionButton();
        $this->assertInstanceOf(EditLoanActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
    public function testEditTypeActionButton()
    {
        $btn = new EditTypeActionButton();
        $this->assertInstanceOf(EditTypeActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
    public function testViewLoanActionButton()
    {
        $btn = new ViewLoanActionButton();
        $this->assertInstanceOf(ViewLoanActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
}
