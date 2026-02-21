<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlAttributeListTest extends TestCase {
    public function testImplementsInterface() {
        $list = new HtmlAttributeList();
        $this->assertInstanceOf(HtmlElementInterface::class, $list);
    }

    public function testAddAndGetAttributes() {
        $list = new HtmlAttributeList();
        $attr = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $list->add($attr);
        $this->assertContains($attr, $list->getAttributes());
    }

    // Add more tests for all public methods and edge cases
}
