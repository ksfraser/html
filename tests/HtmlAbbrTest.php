<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlAbbr;

/**
 * class HtmlAbbrTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlAbbrTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
/**
 * testGetHtml
 *
 * @return void
 */
function testGetHtml() {
    $abbr = new HtmlAbbr(new HtmlString('WHO'));
       $abbr->addAttribute('title', 'World Health Organization');
           $this->assertStringContainsString('<abbr', $abbr->getHtml());
           $this->assertStringContainsString('WHO', $abbr->getHtml());
           $this->assertStringContainsString('title="World Health Organization"', $abbr->getHtml());
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
function testToHtmlOutputsHtml() {
    $abbr = new HtmlAbbr(new HtmlString('HTML'));
       $abbr->addAttribute('title', 'HyperText Markup Language');
           ob_start();
           $abbr->toHtml();
           $output = ob_get_clean();
           $this->assertStringContainsString('<abbr', $output);
           $this->assertStringContainsString('HTML', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public /**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
function testEdgeCasesEmptyContent() {
    $abbr = new HtmlAbbr(new HtmlString(''));
       $abbr->addAttribute('title', 'Empty');
           $this->assertStringContainsString('<abbr', $abbr->getHtml());
           $this->assertStringContainsString('title="Empty"', $abbr->getHtml());
    }
}
