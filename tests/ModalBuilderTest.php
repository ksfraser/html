<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\ModalBuilder;
use Ksfraser\HTML\Elements\Modal;
use Ksfraser\HTML\Elements\Table;
use Ksfraser\HTML\Elements\Stylesheet;

/**
 * class ModalBuilderTest
 *
 * @since 1.0.1 2026-02-16
 */
/**
 * ModalBuilderTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class ModalBuilderTest extends TestCase
{
/**
 * testModalBuilderConstructorSetsId
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testModalBuilderConstructorSetsId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
/**
 * testModalBuilderConstructorSetsId
 *
 * @return void
 */
function testModalBuilderConstructorSetsId()
    {
        $builder = new ModalBuilder('custom-modal');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="custom-modal"', $html);
    }
    
/**
 * testModalBuilderDefaultId
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalBuilderDefaultId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
/**
 * testModalBuilderDefaultId
 *
 * @return void
 */
function testModalBuilderDefaultId()
    {
        $builder = new ModalBuilder();
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="modal"', $html);
    }
    
/**
 * testAddHeading
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddHeading
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
/**
 * testAddHeading
 *
 * @return void
 */
function testAddHeading()
    {
        $builder = new ModalBuilder();
        $builder->addHeading('Test Heading', 2);
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringContainsString('Test Heading', $html);
    }
    
/**
 * testAddParagraph
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddParagraph
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
/**
 * testAddParagraph
 *
 * @return void
 */
function testAddParagraph()
    {
        $builder = new ModalBuilder();
        $builder->addParagraph('This is a test paragraph.');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('This is a test paragraph.', $html);
    }
    
/**
 * testAddTable
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddTable
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
/**
 * testAddTable
 *
 * @return void
 */
function testAddTable()
    {
        $builder = new ModalBuilder();
        $table = new Table();
        $builder->addTable($table);
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('<table', $html);
    }
    
/**
 * testAddCloseButton
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddCloseButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
/**
 * testAddCloseButton
 *
 * @return void
 */
function testAddCloseButton()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton();
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Close', $html);
        $this->assertStringContainsString('class="modal-close-btn', $html);
        $this->assertStringContainsString('closeModal()', $html);
    }
    
/**
 * testAddCloseButtonCustomText
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddCloseButtonCustomText
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomText
 *
 * @return void
 */
function testAddCloseButtonCustomText()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton('Dismiss');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Dismiss', $html);
    }
    
/**
 * testAddCloseButtonCustomHandler
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddCloseButtonCustomHandler
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
/**
 * testAddCloseButtonCustomHandler
 *
 * @return void
 */
function testAddCloseButtonCustomHandler()
    {
        $builder = new ModalBuilder();
        $builder->addCloseButton('Close', 'customCloseFunction()');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('customCloseFunction()', $html);
    }
    
/**
 * testAddRawHtml
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testAddRawHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
/**
 * testAddRawHtml
 *
 * @return void
 */
function testAddRawHtml()
    {
        $builder = new ModalBuilder();
        $builder->addRawHtml('<div class="custom">Custom HTML</div>');
        $modal = $builder->build();
        
        $html = $modal->render();
        $this->assertStringContainsString('Custom HTML', $html);
    }
    
/**
 * testFluentInterface
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testFluentInterface
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
/**
 * testFluentInterface
 *
 * @return void
 */
function testFluentInterface()
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
    
/**
 * testGetStylesheet
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testGetStylesheet
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
/**
 * testGetStylesheet
 *
 * @return void
 */
function testGetStylesheet()
    {
        $stylesheet = ModalBuilder::getStylesheet();
        
        $this->assertInstanceOf(Stylesheet::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $stylesheet);
        
        $html = $stylesheet->getHtml();
        $this->assertStringContainsString('<link', $html);
        $this->assertStringContainsString('rel="stylesheet"', $html);
        $this->assertStringContainsString('href="/css/modal.css"', $html);
    }
}
