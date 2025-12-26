<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\CreateActionLink;
use Ksfraser\HTML\Elements\EditActionLink;
use Ksfraser\HTML\Elements\DeleteActionLink;
use Ksfraser\HTML\Elements\ViewActionLink;
use Ksfraser\HTML\Elements\ListActionLink;
use Ksfraser\HTML\Elements\AddActionLink;

class SpecializedActionLinksTest extends TestCase
{
    public function testCreateActionLinkDefaultLabel()
    {
        $link = new CreateActionLink();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('>Create<', $html);
    }
    
    public function testCreateActionLinkCustomText()
    {
        $link = new CreateActionLink('Add New');
        
        $html = $link->getHtml();
        $this->assertStringContainsString('>Add New<', $html);
    }
    
    public function testCreateActionLinkWithParams()
    {
        $link = new CreateActionLink(null, ['type' => 'loan']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('type=loan', $html);
    }
    
    public function testCreateActionLinkSetLabel()
    {
        $link = new CreateActionLink();
        $link->setLabel('New Item');
        
        $this->assertEquals('New Item', $link->getLabel());
        $html = $link->getHtml();
        $this->assertStringContainsString('>New Item<', $html);
    }
    
    public function testEditActionLinkWithId()
    {
        $link = new EditActionLink(123);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=123', $html);
        $this->assertStringContainsString('>Edit<', $html);
    }
    
    public function testEditActionLinkWithParams()
    {
        $link = new EditActionLink(456, null, ['section' => 'details']);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('id=456', $html);
        $this->assertStringContainsString('section=details', $html);
    }
    
    public function testDeleteActionLinkWithId()
    {
        $link = new DeleteActionLink(789);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=789', $html);
        $this->assertStringContainsString('confirm', $html);
    }
    
    public function testDeleteActionLinkCustomConfirmMessage()
    {
        $link = new DeleteActionLink(101);
        $link->setConfirmMessage('Are you absolutely sure?');
        
        $this->assertEquals('Are you absolutely sure?', $link->getConfirmMessage());
        $html = $link->getHtml();
        $this->assertStringContainsString('Are you absolutely sure?', $html);
    }
    
    public function testViewActionLinkWithId()
    {
        $link = new ViewActionLink(234);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=view', $html);
        $this->assertStringContainsString('id=234', $html);
        $this->assertStringContainsString('>View<', $html);
    }
    
    public function testListActionLinkDefault()
    {
        $link = new ListActionLink();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=list', $html);
        $this->assertStringContainsString('>List<', $html);
    }
    
    public function testListActionLinkWithFilters()
    {
        $link = new ListActionLink(null, ['status' => 'active', 'page' => 2]);
        
        $html = $link->getHtml();
        $this->assertStringContainsString('status=active', $html);
        $this->assertStringContainsString('page=2', $html);
    }
    
    public function testAddActionLinkDefault()
    {
        $link = new AddActionLink();
        
        $html = $link->getHtml();
        $this->assertStringContainsString('action=add', $html);
        $this->assertStringContainsString('>Add<', $html);
    }
}
