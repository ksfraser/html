<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlForm;
use Ksfraser\HTML\HtmlString;

class HtmlFormValidationTest extends TestCase
{
    public function testValidMethod()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setMethod('post');
        $form->setMethod('get');
        $this->assertTrue(true); // No exception
    }

    public function testInvalidMethodThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setMethod('delete');
    }

    public function testValidId()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setId('form1');
        $form->setId('form_id');
        $form->setId('form-id');
        $this->assertTrue(true); // No exception
    }

    public function testInvalidIdThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setId('1form'); // Must start with a letter
    }

    public function testValidAction()
    {
        $form = new HtmlForm(new HtmlString(''));
        $form->setAction('/submit');
        $form->setAction('submit.php');
        $this->assertTrue(true); // No exception
    }

    public function testInvalidActionThrows()
    {
        $form = new HtmlForm(new HtmlString(''));
        $this->expectException(InvalidArgumentException::class);
        $form->setAction(''); // Empty string
    }
}
