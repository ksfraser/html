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
    public /**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
/**
 * testSetActionWithNoParams
 *
 * @return void
 */
function testSetActionWithNoParams()
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
    public /**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
/**
 * testSetActionWithParams
 *
 * @return void
 */
function testSetActionWithParams()
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
    public /**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
/**
 * testCreateStaticMethod
 *
 * @return void
 */
function testCreateStaticMethod()
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
    public /**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
/**
 * testCreateWithCustomText
 *
 * @return void
 */
function testCreateWithCustomText()
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
    public /**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
/**
 * testEditStaticMethod
 *
 * @return void
 */
function testEditStaticMethod()
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
    public /**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
/**
 * testViewStaticMethod
 *
 * @return void
 */
function testViewStaticMethod()
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
    public /**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
/**
 * testDeleteStaticMethod
 *
 * @return void
 */
function testDeleteStaticMethod()
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
    public /**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
/**
 * testListAllStaticMethod
 *
 * @return void
 */
function testListAllStaticMethod()
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
    public /**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
/**
 * testAdminStaticMethod
 *
 * @return void
 */
function testAdminStaticMethod()
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
    public /**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
/**
 * testAdminWithSubAction
 *
 * @return void
 */
function testAdminWithSubAction()
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
    public /**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
/**
 * testCustomStaticMethod
 *
 * @return void
 */
function testCustomStaticMethod()
    {
        $link = ActionLink::custom('export', 'Export Data', ['format' => 'csv']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=export', $html);
        $this->assertStringContainsString('format=csv', $html);
        $this->assertStringContainsString('>Export Data<', $html);
    }
}
