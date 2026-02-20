<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Factory\CreateLink;
use Ksfraser\HTML\Factory\EditLink;
use Ksfraser\HTML\Factory\DeleteLink;
use Ksfraser\HTML\Factory\ViewLink;
use Ksfraser\HTML\Factory\ListLink;
use Ksfraser\HTML\Factory\AddLink;

class SpecializedActionLinksTest extends TestCase
{
    public function testCreateLinkMake()
    {
        $link = CreateLink::make('From Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(CreateLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>From Factory<', $html);
    }

    public function testEditLinkMake()
    {
        $link = EditLink::make(42, 'Edit Factory', ['baz' => 'qux']);
        $this->assertInstanceOf(EditLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=42', $html);
        $this->assertStringContainsString('baz=qux', $html);
        $this->assertStringContainsString('>Edit Factory<', $html);
    }

    public function testDeleteLinkMake()
    {
        $link = DeleteLink::make(99, 'Delete Factory', ['x' => 'y']);
        $this->assertInstanceOf(DeleteLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=99', $html);
        $this->assertStringContainsString('x=y', $html);
        $this->assertStringContainsString('>Delete Factory<', $html);
    }

    public function testViewLinkMake()
    {
        $link = ViewLink::make(7, 'View Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(ViewLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=view', $html);
        $this->assertStringContainsString('id=7', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>View Factory<', $html);
    }

    public function testListLinkMake()
    {
        $link = ListLink::make('List Factory', ['page' => 2]);
        $this->assertInstanceOf(ListLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=list', $html);
        $this->assertStringContainsString('page=2', $html);
        $this->assertStringContainsString('>List Factory<', $html);
    }

    public function testAddLinkMake()
    {
        $link = AddLink::make('Add Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(AddLink::class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=add', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>Add Factory<', $html);
    }
    public function testCreateLinkDefaultLabel()
    {
        $link = new CreateLink();
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('>Create<', $html);
    }

    public function testCreateLinkCustomText()
    {
        $link = new CreateLink('Add New');
        $html = $link->getHtml();
        $this->assertStringContainsString('>Add New<', $html);
    }

    public function testCreateLinkWithParams()
    {
        $link = new CreateLink(null, ['type' => 'loan']);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('type=loan', $html);
    }

    public function testCreateLinkSetLabel()
    {
        $link = new CreateLink();
        $link->setLabel('New Item');
        $this->assertEquals('New Item', $link->getLabel());
        $html = $link->getHtml();
        $this->assertStringContainsString('>New Item<', $html);
    }

    public function testEditLinkWithId()
    {
        $link = new EditLink(123);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=123', $html);
        $this->assertStringContainsString('>Edit<', $html);
    }

    public function testEditLinkWithParams()
    {
        $link = new EditLink(456, null, ['section' => 'details']);
        $html = $link->getHtml();
        $this->assertStringContainsString('id=456', $html);
        $this->assertStringContainsString('section=details', $html);
    }

    public function testDeleteLinkWithId()
    {
        $link = new DeleteLink(789);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=789', $html);
        $this->assertStringContainsString('confirm', $html);
    }


}
