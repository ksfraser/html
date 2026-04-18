<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlForm;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlFormValidationTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlFormValidationTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlFormValidationTest extends TestCase
{
/**
 * testValidMethod
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testValidMethod
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
/**
 * testValidMethod
 *
 * @return void
 */
function testValidMethod()
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
    public /**
 * testInvalidMethodThrows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
/**
 * testInvalidMethodThrows
 *
 * @return void
 */
function testInvalidMethodThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::/**
 * setMethod
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $form->setMethod('delete');
    }

/**
 * testValidId
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testValidId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
/**
 * testValidId
 *
 * @return void
 */
function testValidId()
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
    public /**
 * testInvalidIdThrows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
/**
 * testInvalidIdThrows
 *
 * @return void
 */
function testInvalidIdThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $form->setId('1form'); // Must start with a letter
    }

/**
 * testValidAction
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testValidAction
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
/**
 * testValidAction
 *
 * @return void
 */
function testValidAction()
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
    public /**
 * testInvalidActionThrows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
/**
 * testInvalidActionThrows
 *
 * @return void
 */
function testInvalidActionThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::/**
 * setAction
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        $form->setAction(''); // Empty string
    }
}
