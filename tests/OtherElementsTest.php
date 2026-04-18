<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlCite;
use Ksfraser\HTML\Elements\HtmlCode;
use Ksfraser\HTML\Elements\HtmlDetails;
use Ksfraser\HTML\Elements\HtmlSummary;
use Ksfraser\HTML\Elements\HtmlDialog;
use Ksfraser\HTML\Elements\HtmlH;

/**
 * class OtherElementsTest
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class OtherElementsTest extends TestCase {
/**
 * testCiteRendersText
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
/**
 * testCiteRendersText
 *
 * @return void
 */
function testCiteRendersText() {
        $c = new HtmlCite('Work Title');
        $this->assertStringContainsString('<cite', $c->getHtml());
        $this->assertStringContainsString('Work Title', $c->getHtml());
    }

/**
 * testCodeRendersPreEscaped
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
/**
 * testCodeRendersPreEscaped
 *
 * @return void
 */
function testCodeRendersPreEscaped() {
        $code = new HtmlCode('<x>&');
        $html = $code->getHtml();
        $this->assertStringContainsString('&lt;x&gt;&amp;', $html);
    }

/**
 * testDetailsAndSummaryBehavior
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
/**
 * testDetailsAndSummaryBehavior
 *
 * @return void
 */
function testDetailsAndSummaryBehavior() {
        $details = new HtmlDetails();
        $summary = new HtmlSummary('More');
        $details->addNested($summary);
        $html = $details->getHtml();
        $this->assertStringContainsString('<details', $html);
        $this->assertStringContainsString('<summary', $html);
        $this->assertStringContainsString('More', $html);
    }

/**
 * testDialogOpenAttribute
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
/**
 * testDialogOpenAttribute
 *
 * @return void
 */
function testDialogOpenAttribute() {
        $d = new HtmlDialog(true);
        $this->assertStringContainsString('<dialog', $d->getHtml());
        $this->assertStringContainsString('open', $d->getHtml());
    }

/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
/**
 * testHtmlHAliasesRenderCorrectTag
 *
 * @return void
 */
function testHtmlHAliasesRenderCorrectTag() {
        $h = new HtmlH(3, 'Title');
        $this->assertStringContainsString('<h3', $h->getHtml());
        $this->assertStringContainsString('Title', $h->getHtml());
    }
}
