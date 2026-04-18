<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Buttons\DeleteButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class DeleteButtonTest
 *
 * @since 1.0.4 2026-02-21
 */
class DeleteButtonTest extends TestCase {
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
        $btn = new DeleteButton(new HtmlString('Delete'), 'id123');
        $this->assertStringContainsString('Delete', $btn->getHtml());
    }
/**
 * testSetConfirmation
 *
 * @since 1.0.4 2026-02-21
 * @return void
 */
    public /**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
/**
 * testSetConfirmation
 *
 * @return void
 */
function testSetConfirmation() {
        $btn = new DeleteButton(new HtmlString('Delete'), 'id123');
        $btn->setConfirmation('Are you sure?');
        $this->assertStringContainsString('confirm', $btn->getHtml());
    }
    // Add more tests for public methods and edge cases
}
