<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlListItem;
use Ksfraser\HTML\HtmlElementInterface;

class DummyElement implements HtmlElementInterface {
    public function __toString() {
        return 'dummy';
    }

    public function getHtml(): string {
        return 'dummy';
    }

    public function toHtml(): void {
        echo 'dummy';
    }
}

class HtmlListItemTest extends TestCase {
    public function testInstance() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $this->assertInstanceOf(HtmlListItem::class, $li);
    }

    public function testTagIsLi() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $this->assertEquals('li', $li->tag);
    }

    public function testToStringReturnsExpectedHtml() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $html = (string)$li;
        $this->assertStringContainsString('<li', $html);
        $this->assertStringContainsString('dummy', $html);
        $this->assertStringContainsString('</li>', $html);
    }

    public function testConstructorThrowsTypeErrorOnInvalidArgument() {
        $this->expectException(\TypeError::class);
        new HtmlListItem('not an HtmlElementInterface');
    }
}