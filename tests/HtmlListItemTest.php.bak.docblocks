<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlListItem;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * class DummyElement
 *
 * @since 1.0.3 2026-02-21
 */
class DummyElement implements HtmlElementInterface {
/**
 * __toString
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function __toString() {
        return 'dummy';
    }

/**
 * getHtml
 *
 * @since 1.0.3 2026-02-21
 * @return string
 */
    public function getHtml(): string {
        return 'dummy';
    }

/**
 * toHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function toHtml(): void {
        echo 'dummy';
    }
}

/**
 * class HtmlListItemTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlListItemTest extends TestCase {
/**
 * testInstance
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testInstance() {
        $dummy = new DummyElement();
        $li = new HtmlListItem($dummy);
        $this->assertInstanceOf(HtmlListItem::class, $li);
    }

/**
 * testTagIsLi
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testTagIsLi() {
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
    public function testToStringReturnsExpectedHtml() {
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
    public function testConstructorThrowsTypeErrorOnInvalidArgument() {
        $this->expectException(\TypeError::class);
        new HtmlListItem('not an HtmlElementInterface');
    }
}