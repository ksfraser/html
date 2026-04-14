<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlCaption;
use Ksfraser\HTML\Elements\HtmlCol;
use Ksfraser\HTML\Elements\HtmlColgroup;
use Ksfraser\HTML\Elements\HtmlTbody;
use Ksfraser\HTML\Elements\HtmlThead;
use Ksfraser\HTML\Elements\HtmlTfoot;
use Ksfraser\HTML\Elements\HtmlTr;
use Ksfraser\HTML\HtmlElement;

/**
 * class HtmlTableElementsTest
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlTableElementsTest extends TestCase {
/**
 * testCaptionRendersContent
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testCaptionRendersContent() {
        $c = new HtmlCaption('Table title');
        $html = $c->getHtml();
        $this->assertStringContainsString('<caption', $html);
        $this->assertStringContainsString('Table title', $html);
    }

/**
 * testColAndColgroupVoidAndAttributes
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testColAndColgroupVoidAndAttributes() {
        $col = new HtmlCol();
        $col->setSpan(2);
        $this->assertStringContainsString('<col', $col->getHtml());
        $this->assertStringContainsString('span="2"', $col->getHtml());

        $group = new HtmlColgroup();
        $group->addNested($col);
        $this->assertStringContainsString('<colgroup', $group->getHtml());
        $this->assertStringContainsString('<col', $group->getHtml());
    }

/**
 * testTheadTbodyTfootAndTrNesting
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testTheadTbodyTfootAndTrNesting() {
        $tr = new HtmlTr();
        $td = new HtmlElement();
        $td->setTag('td')->setAttribute('data-test', 'x');
        $tr->addNested($td);

        $thead = new HtmlThead();
        $thead->addNested($tr);
        $this->assertStringContainsString('<thead', $thead->getHtml());
        $this->assertStringContainsString('<tr', $thead->getHtml());

        $tbody = new HtmlTbody();
        $tbody->addNested($tr);
        $this->assertStringContainsString('<tbody', $tbody->getHtml());

        $tfoot = new HtmlTfoot();
        $tfoot->addNested($tr);
        $this->assertStringContainsString('<tfoot', $tfoot->getHtml());
    }
}
