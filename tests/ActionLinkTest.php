<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Factory\ActionLink;

/**
 * class ActionLinkTest
 *
 * @since 1.0.1 2026-02-16
 */
class ActionLinkTest extends TestCase
{
/**
 * testSetActionWithNoParams
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testSetActionWithNoParams()
    {
        $link = new ActionLink();
        $link->setAction('create');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=create"', $html);
    }
    
/**
 * testSetActionWithParams
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testSetActionWithParams()
    {
        $link = new ActionLink();
        $link->setAction('edit', ['id' => 123, 'tab' => 'details']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=123', $html);
        $this->assertStringContainsString('tab=details', $html);
    }
    
/**
 * testCreateStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testCreateStaticMethod()
    {
        $link = ActionLink::create();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=create"', $html);
        $this->assertStringContainsString('>Create<', $html);
    }
    
/**
 * testCreateWithCustomText
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testCreateWithCustomText()
    {
        $link = ActionLink::create('Add New Item');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('>Add New Item<', $html);
    }
    
/**
 * testEditStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testEditStaticMethod()
    {
        $link = ActionLink::edit(456);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=456', $html);
        $this->assertStringContainsString('>Edit<', $html);
    }
    
/**
 * testViewStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testViewStaticMethod()
    {
        $link = ActionLink::view(789);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=view', $html);
        $this->assertStringContainsString('id=789', $html);
    }
    
/**
 * testDeleteStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testDeleteStaticMethod()
    {
        $link = ActionLink::delete(101);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=101', $html);
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('confirm', $html);
    }
    
/**
 * testListAllStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testListAllStaticMethod()
    {
        $link = ActionLink::listAll();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=list"', $html);
    }
    
/**
 * testAdminStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testAdminStaticMethod()
    {
        $link = ActionLink::admin();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=admin', $html);
    }
    
/**
 * testAdminWithSubAction
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testAdminWithSubAction()
    {
        $link = ActionLink::admin('selectors');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=admin_selectors', $html);
    }
    
/**
 * testCustomStaticMethod
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
    public function testCustomStaticMethod()
    {
        $link = ActionLink::custom('export', 'Export Data', ['format' => 'csv']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=export', $html);
        $this->assertStringContainsString('format=csv', $html);
        $this->assertStringContainsString('>Export Data<', $html);
    }
}
