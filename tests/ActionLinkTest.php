<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\ActionLink;

class ActionLinkTest extends TestCase
{
    public function testSetActionWithNoParams()
    {
        $link = new ActionLink();
        $link->setAction('create');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=create"', $html);
    }
    
    public function testSetActionWithParams()
    {
        $link = new ActionLink();
        $link->setAction('edit', ['id' => 123, 'tab' => 'details']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=123', $html);
        $this->assertStringContainsString('tab=details', $html);
    }
    
    public function testCreateStaticMethod()
    {
        $link = ActionLink::create();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=create"', $html);
        $this->assertStringContainsString('>Create<', $html);
    }
    
    public function testCreateWithCustomText()
    {
        $link = ActionLink::create('Add New Item');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('>Add New Item<', $html);
    }
    
    public function testEditStaticMethod()
    {
        $link = ActionLink::edit(456);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=456', $html);
        $this->assertStringContainsString('>Edit<', $html);
    }
    
    public function testViewStaticMethod()
    {
        $link = ActionLink::view(789);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=view', $html);
        $this->assertStringContainsString('id=789', $html);
    }
    
    public function testDeleteStaticMethod()
    {
        $link = ActionLink::delete(101);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=101', $html);
        $this->assertStringContainsString('onclick=', $html);
        $this->assertStringContainsString('confirm', $html);
    }
    
    public function testListAllStaticMethod()
    {
        $link = ActionLink::listAll();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('href="?action=list"', $html);
    }
    
    public function testAdminStaticMethod()
    {
        $link = ActionLink::admin();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=admin', $html);
    }
    
    public function testAdminWithSubAction()
    {
        $link = ActionLink::admin('selectors');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=admin_selectors', $html);
    }
    
    public function testCustomStaticMethod()
    {
        $link = ActionLink::custom('export', 'Export Data', ['format' => 'csv']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=export', $html);
        $this->assertStringContainsString('format=csv', $html);
        $this->assertStringContainsString('>Export Data<', $html);
    }
}
