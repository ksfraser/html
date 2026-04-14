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
class ModalBuilderTest extends TestCase
{
/**
 * testModalBuilderConstructorSetsId
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testModalBuilderConstructorSetsId()
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
    public function testModalBuilderDefaultId()
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
    public function testAddHeading()
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
    public function testAddParagraph()
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
    public function testAddTable()
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
    
/**
 * testAddCloseButtonCustomText
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testAddCloseButtonCustomText()
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
    public function testAddCloseButtonCustomHandler()
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
    public function testAddRawHtml()
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
    
/**
 * testGetStylesheet
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
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
