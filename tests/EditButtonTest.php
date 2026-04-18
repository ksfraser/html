<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\EditButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class EditButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class EditButtonTest extends TestCase {
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
        $btn = new EditButton(new HtmlString('Edit'), 'id123');
        $this->assertStringContainsString('Edit', $btn->getHtml());
    }
/**
 * testSetOnclickFunction
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
/**
 * testSetOnclickFunction
 *
 * @return void
 */
function testSetOnclickFunction() {
        $btn = new EditButton(new HtmlString('Edit'), 'id123', 'editFn()');
        $this->assertStringContainsString('onclick', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
