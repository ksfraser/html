<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Button\CloseButton;
use Ksfraser\HTML\Button\SubmitButton;
use Ksfraser\HTML\Elements\HtmlString;

class ButtonsTest extends TestCase
{
    public function testCloseButtonDefaultLabel()
    {
        $button = new CloseButton();
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Close', $html);
        $this->assertStringContainsString('class="btn btn-secondary', $html);
    }
    
    public function testCloseButtonCustomLabel()
    {
        $button = new CloseButton(new HtmlString('Dismiss'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Dismiss', $html);
    }
    
    public function testCloseButtonSetOnclickFunction()
    {
        $button = new CloseButton();
        $button->setOnclick(new \Ksfraser\HTML\HtmlAttribute('onclick', 'closeMyModal()'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('onclick="closeMyModal()"', $html);
    }
    
    public function testSubmitButtonDefaultLabel()
    {
        $button = new SubmitButton();
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Submit', $html);
        $this->assertStringContainsString('type="submit"', $html);
        $this->assertStringContainsString('class="btn btn-primary', $html);
    }
    
    public function testSubmitButtonCustomLabel()
    {
        $button = new SubmitButton(new HtmlString('Save'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('Save', $html);
    }
    
    public function testSubmitButtonSetOnclickFunction()
    {
        $button = new SubmitButton();
        $button->setOnclick(new \Ksfraser\HTML\HtmlAttribute('onclick', 'return validateForm()'));
        
        $html = $button->getHtml();
        $this->assertStringContainsString('onclick="return validateForm()"', $html);
    }
}
