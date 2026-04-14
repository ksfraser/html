<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\Modal;
use Ksfraser\HTML\Elements\ModalContent;
use Ksfraser\HTML\Elements\ModalBuilder;

/**
 * class ModalTest
 *
 * @since 1.0.1 2026-02-16
 */
/**
 * ModalTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class ModalTest extends TestCase
{
/**
 * testModalConstructorSetsId
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testModalConstructorSetsId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalConstructorSetsId()
    {
        $modal = new Modal('test-modal');
        
        $html = $modal->render();
        $this->assertStringContainsString('id="test-modal"', $html);
        $this->assertStringContainsString('class="modal-overlay"', $html);
    }
    
/**
 * testModalDefaultId
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalDefaultId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalDefaultId()
    {
        $modal = new Modal();
        
        $html = $modal->render();
        $this->assertStringContainsString('id="modal"', $html);
    }
    
/**
 * testModalSetContent
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalSetContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalSetContent()
    {
        $modal = new Modal();
        $content = new ModalContent();
        $modal->setContent($content);
        
        $retrievedContent = $modal->getContent();
        $this->assertInstanceOf(ModalContent::/**
 * testModalRenderWithContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $retrievedContent);
    }
    
/**
 * testModalRenderWithContent
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalRenderWithContent
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalRenderWithContent()
    {
        $modal = new Modal('my-modal');
        $content = new ModalContent();
        $modal->setContent($content);
        
        $html = $modal->render();
        $this->assertStringContainsString('class="modal-overlay"', $html);
        $this->assertStringContainsString('class="modal-content"', $html);
    }
    
/**
 * testModalGetStylesheetPath
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalGetStylesheetPath
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalGetStylesheetPath()
    {
        $path = Modal::getStylesheetPath();
        
        $this->assertEquals('/css/modal.css', $path);
    }
    
/**
 * testModalContentHasCorrectClass
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalContentHasCorrectClass
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalContentHasCorrectClass()
    {
        $content = new ModalContent();
        
        $html = $content->render();
        $this->assertStringContainsString('class="modal-content"', $html);
    }
    
/**
 * testModalContentGetStylesheetPath
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public /**
 * testModalContentGetStylesheetPath
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testModalContentGetStylesheetPath()
    {
        $path = ModalContent::getStylesheetPath();
        
        $this->assertEquals('/css/modal.css', $path);
    }
}
