<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\AddButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class AddButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class AddButtonTest extends TestCase {
/**
 * testDefaultLabel
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
/**
 * testDefaultLabel
 *
 * @return void
 */
function testDefaultLabel() {
        $btn = new AddButton(new HtmlString('Add'));
        $this->assertStringContainsString('Add', $btn->getHtml());
    }
/**
 * testCssClass
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
/**
 * testCssClass
 *
 * @return void
 */
function testCssClass() {
        $btn = new AddButton(new HtmlString('Add'));
        $this->assertStringContainsString('btn-success', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
