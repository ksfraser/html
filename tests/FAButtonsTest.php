<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\FAButtons\DeleteFrequencyActionButton;
use Ksfraser\HTML\FAButtons\DeleteTypeActionButton;
use Ksfraser\HTML\FAButtons\EditFrequencyActionButton;
use Ksfraser\HTML\FAButtons\EditLoanActionButton;
use Ksfraser\HTML\FAButtons\EditTypeActionButton;
use Ksfraser\HTML\FAButtons\ViewLoanActionButton;

/**
 * class FAButtonsTest
 *
 * @since 1.0.2 2026-02-20
 */
class FAButtonsTest extends TestCase
{
/**
 * testDeleteFrequencyActionButton
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testDeleteFrequencyActionButton()
    {
        $btn = new DeleteFrequencyActionButton();
        $this->assertInstanceOf(DeleteFrequencyActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testDeleteTypeActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public function testDeleteTypeActionButton()
    {
        $btn = new DeleteTypeActionButton();
        $this->assertInstanceOf(DeleteTypeActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditFrequencyActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public function testEditFrequencyActionButton()
    {
        $btn = new EditFrequencyActionButton();
        $this->assertInstanceOf(EditFrequencyActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditLoanActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public function testEditLoanActionButton()
    {
        $btn = new EditLoanActionButton();
        $this->assertInstanceOf(EditLoanActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditTypeActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public function testEditTypeActionButton()
    {
        $btn = new EditTypeActionButton();
        $this->assertInstanceOf(EditTypeActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testViewLoanActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public function testViewLoanActionButton()
    {
        $btn = new ViewLoanActionButton();
        $this->assertInstanceOf(ViewLoanActionButton::class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
}
