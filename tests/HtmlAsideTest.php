<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlAside;

class HtmlAsideTest extends TestCase {
    public function testGetHtml() {
        $aside = new HtmlAside(new HtmlString('Aside content here'));
        $this->assertStringContainsString('<aside', $aside->getHtml());
        $this->assertStringContainsString('Aside content here', $aside->getHtml());
    }

    public function testToHtmlOutputsHtml() {
        $aside = new HtmlAside(new HtmlString('Another aside'));
        ob_start();
        $aside->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<aside', $output);
        $this->assertStringContainsString('Another aside', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $aside = new HtmlAside(new HtmlString(''));
        $this->assertStringContainsString('<aside', $aside->getHtml());
    }
}
