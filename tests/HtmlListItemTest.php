<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlListItem;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class DummyElement
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * DummyElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class DummyElement implements HtmlElementInterface {
/**
 * __toString
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * __toString
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function __toString() {
        return 'dummy';
    }

/**
 * getHtml
 *
 * @since 1.0.3 2026-02-21
 * @return string
 */
    public /**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string {
        return 'dummy';
    }

/**
 * toHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void {
        echo 'dummy';
    }
}

/**
 * class HtmlListItemTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlListItemTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlListItemTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testInstance
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testInstance() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $this->assertInstanceOf(HtmlListItem::/**
 * testTagIsLi
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $li);
    }

/**
 * testTagIsLi
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testTagIsLi
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testTagIsLi() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $this->assertEquals('li', $li->getTag());
    }

/**
 * testToStringReturnsExpectedHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testToStringReturnsExpectedHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testToStringReturnsExpectedHtml() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $html = (string)$li;
        $this->assertStringContainsString('<li', $html);
        $this->assertStringContainsString('dummy', $html);
        $this->assertStringContainsString('</li>', $html);
    }

/**
 * testConstructorThrowsTypeErrorOnInvalidArgument
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testConstructorThrowsTypeErrorOnInvalidArgument
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function testConstructorThrowsTypeErrorOnInvalidArgument() {
        $this->expectException(\TypeError::/**
 * HtmlListItem
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class);
        new HtmlListItem('not an HtmlElementInterface');
    }
}