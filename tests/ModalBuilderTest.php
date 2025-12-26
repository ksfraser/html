<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\ModalBuilder;
use Ksfraser\HTML\Elements\Modal;
use Ksfraser\HTML\Elements\Table;
use Ksfraser\HTML\Elements\Stylesheet;

class ModalBuilderTest extends TestCase
{
    public function testModalBuilderConstructorSetsId()
    {
        $builder = new ModalBuilder('custom-modal');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="custom-modal"', $html);
    }
    
    public function testModalBuilderDefaultId()
    {
        $builder = new ModalBuilder();
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="modal"', $html);
    }
    
    public function testAddHeading()
    {
        $builder = new ModalBuilder();
        $builder->addHeading('Test Heading', 2);
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringContainsString('Test Heading', $html);
    }
    
    public function testAddParagraph()
    {
        $builder = new ModalBuilder();
        $builder->addParagraph('This is a test paragraph.');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('This is a test paragraph.', $html);
    }
    
    public function testAddTable()
    {
        $builder = new ModalBuilder();
        $table = new Table();
        $builder->addTable($table);
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('<table', $html);
    }
    
    public function testAddCloseButton()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton();
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Close', $html);
        $this->assertStringContainsString('class="modal-close-btn', $html);
        $this->assertStringContainsString('closeModal()', $html);
    }
    
    public function testAddCloseButtonCustomText()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton('Dismiss');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Dismiss', $html);
    }
    
    public function testAddCloseButtonCustomHandler()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton('Close', 'customCloseFunction()');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('customCloseFunction()', $html);
    }
    
    public function testAddRawHtml()
    {
        $builder = new ModalBuilder();
        $builder->addRawHtml('<div class="custom">Custom HTML</div>');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Custom HTML', $html);
    }
    
    public function testFluentInterface()
    {
        $builder = new ModalBuilder();
        $modal = $builder
            ->addHeading('Modal Title')
            ->addParagraph('Modal description.')
            ->addCloseButton()
            ->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Modal Title', $html);
        $this->assertStringContainsString('Modal description.', $html);
        $this->assertStringContainsString('Close', $html);
    }
    
    public function testGetStylesheet()
    {
        $stylesheet = ModalBuilder::getStylesheet();
        
        $this->assertInstanceOf(Stylesheet::class, $stylesheet);
        
        $html = $stylesheet->getHtml();
        $this->assertStringContainsString('<link', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
        $this->assertStringContainsString('href="/css/modal.css"', $html);
    }
}
