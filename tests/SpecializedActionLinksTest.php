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

    // ...existing code...
}
