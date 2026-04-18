<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Button\CloseButton;
use Ksfraser\HTML\Button\SubmitButton;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class ButtonsTest
 *
 * @since 1.0.1 2026-02-16
 */
class ButtonsTest extends TestCase
{
/**
 * testCloseButtonDefaultLabel
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
/**
 * testCloseButtonDefaultLabel
 *
 * @return void
 */
function testCloseButtonDefaultLabel()
    {
        $button = new CloseButton();
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Close', $html);
        $this->assertStringContainsString('class="btn btn-secondary', $html);
    }
    
/**
 * testCloseButtonCustomLabel
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
/**
 * testCloseButtonCustomLabel
 *
 * @return void
 */
function testCloseButtonCustomLabel()
    {
        $button = new CloseButton(new HtmlString('Dismiss'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Dismiss', $html);
    }
    
/**
 * testCloseButtonSetOnclickFunction
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testCloseButtonSetOnclickFunction
 *
 * @return void
 */
function testCloseButtonSetOnclickFunction()
    {
        $button = new CloseButton();
        $button->setOnclick(new \Ksfraser\HTML\HtmlAttribute('onclick', 'closeMyModal()'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('onclick="closeMyModal()"', $html);
    }
    
/**
 * testSubmitButtonDefaultLabel
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
/**
 * testSubmitButtonDefaultLabel
 *
 * @return void
 */
function testSubmitButtonDefaultLabel()
    {
        $button = new SubmitButton();
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Submit', $html);
        $this->assertStringContainsString('type="submit"', $html);
        $this->assertStringContainsString('class="btn btn-primary', $html);
    }
    
/**
 * testSubmitButtonCustomLabel
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
/**
 * testSubmitButtonCustomLabel
 *
 * @return void
 */
function testSubmitButtonCustomLabel()
    {
        $button = new SubmitButton(new HtmlString('Save'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Save', $html);
    }
    
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
/**
 * testSubmitButtonSetOnclickFunction
 *
 * @return void
 */
function testSubmitButtonSetOnclickFunction()
    {
        $button = new SubmitButton();
        $button->setOnclick(new \Ksfraser\HTML\HtmlAttribute('onclick', 'return validateForm()'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('onclick="return validateForm()"', $html);
    }
}
