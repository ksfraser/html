<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\Modal;
use Ksfraser\HTML\Elements\ModalContent;
use Ksfraser\HTML\Elements\ModalBuilder;

class ModalTest extends TestCase
{
    public function testModalConstructorSetsId()
    {
        $modal = new Modal('test-modal');
        
        $html = $modal->render();
        $this->assertStringContainsString('id="test-modal"', $html);
        $this->assertStringContainsString('class="modal-overlay"', $html);
    }
    
    public function testModalDefaultId()
    {
        $modal = new Modal();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="modal"', $html);
    }
    
    public function testModalSetContent()
    {
        $modal = new Modal();
        $content = new ModalContent();
        $modal->setContent($content);
        
        $retrievedContent = $modal->getContent();
        $this->assertInstanceOf(ModalContent::class, $retrievedContent);
    }
    
    public function testModalRenderWithContent()
    {
        $modal = new Modal('my-modal');
        $content = new ModalContent();
        $modal->setContent($content);
        
        $html = $modal->render();
        $this->assertStringContainsString('class="modal-overlay"', $html);
        $this->assertStringContainsString('class="modal-content"', $html);
    }
    
    public function testModalGetStylesheetPath()
    {
        $path = Modal::getStylesheetPath();
        
        $this->assertEquals('/css/modal.css', $path);
    }
    
    public function testModalContentHasCorrectClass()
    {
        $content = new ModalContent();
        
        $html = $content->render();
        $this->assertStringContainsString('class="modal-content"', $html);
    }
    
    public function testModalContentGetStylesheetPath()
    {
        $path = ModalContent::getStylesheetPath();
        
        $this->assertEquals('/css/modal.css', $path);
    }
}
