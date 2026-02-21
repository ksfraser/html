<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlAbbr;

class HtmlAbbrTest extends TestCase {
    public function testGetHtml() {
    $abbr = new HtmlAbbr(new HtmlString('WHO'));
       $abbr->addAttribute('title', 'World Health Organization');
           $this->assertStringContainsString('<abbr', $abbr->getHtml());
           $this->assertStringContainsString('WHO', $abbr->getHtml());
           $this->assertStringContainsString('title="World Health Organization"', $abbr->getHtml());
    }

    public function testToHtmlOutputsHtml() {
    $abbr = new HtmlAbbr(new HtmlString('HTML'));
       $abbr->addAttribute('title', 'HyperText Markup Language');
           ob_start();
           $abbr->toHtml();
           $output = ob_get_clean();
           $this->assertStringContainsString('<abbr', $output);
           $this->assertStringContainsString('HTML', $output);
    }

    public function testEdgeCasesEmptyContent() {
    $abbr = new HtmlAbbr(new HtmlString(''));
       $abbr->addAttribute('title', 'Empty');
           $this->assertStringContainsString('<abbr', $abbr->getHtml());
           $this->assertStringContainsString('title="Empty"', $abbr->getHtml());
    }
}
