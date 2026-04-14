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
/**
 * FAButtonsTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class FAButtonsTest extends TestCase
{
/**
 * testDeleteFrequencyActionButton
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testDeleteFrequencyActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDeleteFrequencyActionButton()
    {
        $btn = new DeleteFrequencyActionButton();
        $this->assertInstanceOf(DeleteFrequencyActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testDeleteTypeActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testDeleteTypeActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testDeleteTypeActionButton()
    {
        $btn = new DeleteTypeActionButton();
        $this->assertInstanceOf(DeleteTypeActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditFrequencyActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditFrequencyActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEditFrequencyActionButton()
    {
        $btn = new EditFrequencyActionButton();
        $this->assertInstanceOf(EditFrequencyActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditLoanActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditLoanActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEditLoanActionButton()
    {
        $btn = new EditLoanActionButton();
        $this->assertInstanceOf(EditLoanActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testEditTypeActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditTypeActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testEditTypeActionButton()
    {
        $btn = new EditTypeActionButton();
        $this->assertInstanceOf(EditTypeActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
/**
 * testViewLoanActionButton
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testViewLoanActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testViewLoanActionButton()
    {
        $btn = new ViewLoanActionButton();
        $this->assertInstanceOf(ViewLoanActionButton::/**
 * assertStringContainsString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $btn);
        $this->assertStringContainsString('button', $btn->getHtml());
    }
}
