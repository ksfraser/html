<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlForm;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlFormValidationTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlFormValidationTest extends TestCase
{
/**
 * testValidMethod
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testValidMethod()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setMethod('post');
        $form->setMethod('get');
        $this->assertTrue(true); // No exception
    }

/**
 * testInvalidMethodThrows
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testInvalidMethodThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setMethod('delete');
    }

/**
 * testValidId
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testValidId()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setId('form1');
        $form->setId('form_id');
        $form->setId('form-id');
        $this->assertTrue(true); // No exception
    }

/**
 * testInvalidIdThrows
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testInvalidIdThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setId('1form'); // Must start with a letter
    }

/**
 * testValidAction
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testValidAction()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setAction('/submit');
        $form->setAction('submit.php');
        $this->assertTrue(true); // No exception
    }

/**
 * testInvalidActionThrows
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testInvalidActionThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setAction(''); // Empty string
    }
}
