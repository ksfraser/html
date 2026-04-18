<?php

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Factory\CreateLink;
use Ksfraser\HTML\Factory\EditLink;
use Ksfraser\HTML\Factory\DeleteLink;
use Ksfraser\HTML\Factory\ViewLink;
use Ksfraser\HTML\Factory\ListLink;
use Ksfraser\HTML\Factory\AddLink;

/**
 * class SpecializedActionLinksTest
 *
 * @since 1.0.1 2026-02-16
 */
/**
 * SpecializedActionLinksTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class SpecializedActionLinksTest extends TestCase
{
/**
 * testCreateLinkMake
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testCreateLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
/**
 * testCreateLinkMake
 *
 * @return void
 */
function testCreateLinkMake()
    {
        $link = CreateLink::make('From Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(CreateLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>From Factory<', $html);
    }

/**
 * testEditLinkMake
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
/**
 * testEditLinkMake
 *
 * @return void
 */
function testEditLinkMake()
    {
        $link = EditLink::make(42, 'Edit Factory', ['baz' => 'qux']);
        $this->assertInstanceOf(EditLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=42', $html);
        $this->assertStringContainsString('baz=qux', $html);
        $this->assertStringContainsString('>Edit Factory<', $html);
    }

/**
 * testDeleteLinkMake
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testDeleteLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
/**
 * testDeleteLinkMake
 *
 * @return void
 */
function testDeleteLinkMake()
    {
        $link = DeleteLink::make(99, 'Delete Factory', ['x' => 'y']);
        $this->assertInstanceOf(DeleteLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=99', $html);
        $this->assertStringContainsString('x=y', $html);
        $this->assertStringContainsString('>Delete Factory<', $html);
    }

/**
 * testViewLinkMake
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testViewLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
/**
 * testViewLinkMake
 *
 * @return void
 */
function testViewLinkMake()
    {
        $link = ViewLink::make(7, 'View Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(ViewLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=view', $html);
        $this->assertStringContainsString('id=7', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>View Factory<', $html);
    }

/**
 * testListLinkMake
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testListLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
/**
 * testListLinkMake
 *
 * @return void
 */
function testListLinkMake()
    {
        $link = ListLink::make('List Factory', ['page' => 2]);
        $this->assertInstanceOf(ListLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=list', $html);
        $this->assertStringContainsString('page=2', $html);
        $this->assertStringContainsString('>List Factory<', $html);
    }

/**
 * testAddLinkMake
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testAddLinkMake
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
/**
 * testAddLinkMake
 *
 * @return void
 */
function testAddLinkMake()
    {
        $link = AddLink::make('Add Factory', ['foo' => 'bar']);
        $this->assertInstanceOf(AddLink::/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $link);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=add', $html);
        $this->assertStringContainsString('foo=bar', $html);
        $this->assertStringContainsString('>Add Factory<', $html);
    }
/**
 * testCreateLinkDefaultLabel
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testCreateLinkDefaultLabel
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
/**
 * testCreateLinkDefaultLabel
 *
 * @return void
 */
function testCreateLinkDefaultLabel()
    {
        $link = new CreateLink();
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('>Create<', $html);
    }

/**
 * testCreateLinkCustomText
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testCreateLinkCustomText
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
/**
 * testCreateLinkCustomText
 *
 * @return void
 */
function testCreateLinkCustomText()
    {
        $link = new CreateLink('Add New');
        $html = $link->getHtml();
        $this->assertStringContainsString('>Add New<', $html);
    }

/**
 * testCreateLinkWithParams
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testCreateLinkWithParams
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
/**
 * testCreateLinkWithParams
 *
 * @return void
 */
function testCreateLinkWithParams()
    {
        $link = new CreateLink(null, ['type' => 'loan']);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=create', $html);
        $this->assertStringContainsString('type=loan', $html);
    }

/**
 * testCreateLinkSetLabel
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testCreateLinkSetLabel
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
/**
 * testCreateLinkSetLabel
 *
 * @return void
 */
function testCreateLinkSetLabel()
    {
        $link = new CreateLink();
        $link->setLabel('New Item');
        $this->assertEquals('New Item', $link->getLabel());
        $html = $link->getHtml();
        $this->assertStringContainsString('>New Item<', $html);
    }

/**
 * testEditLinkWithId
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditLinkWithId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
/**
 * testEditLinkWithId
 *
 * @return void
 */
function testEditLinkWithId()
    {
        $link = new EditLink(123);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=edit', $html);
        $this->assertStringContainsString('id=123', $html);
        $this->assertStringContainsString('>Edit<', $html);
    }

/**
 * testEditLinkWithParams
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testEditLinkWithParams
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
/**
 * testEditLinkWithParams
 *
 * @return void
 */
function testEditLinkWithParams()
    {
        $link = new EditLink(456, null, ['section' => 'details']);
        $html = $link->getHtml();
        $this->assertStringContainsString('id=456', $html);
        $this->assertStringContainsString('section=details', $html);
    }

/**
 * testDeleteLinkWithId
 *
 * @since 1.0.2 2026-02-20
 * @return void
 */
    public /**
 * testDeleteLinkWithId
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
/**
 * testDeleteLinkWithId
 *
 * @return void
 */
function testDeleteLinkWithId()
    {
        $link = new DeleteLink(789);
        $html = $link->getHtml();
        $this->assertStringContainsString('action=delete', $html);
        $this->assertStringContainsString('id=789', $html);
        $this->assertStringContainsString('confirm', $html);
    }


}
