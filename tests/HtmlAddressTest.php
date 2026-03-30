<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlAddress;

class HtmlAddressTest extends TestCase {
    public function testGetHtml() {
        $address = new HtmlAddress(new HtmlString('123 Main St, Springfield'));
        $this->assertStringContainsString('<address', $address->getHtml());
        $this->assertStringContainsString('123 Main St', $address->getHtml());
    }

    public function testToHtmlOutputsHtml() {
        $address = new HtmlAddress(new HtmlString('456 Elm St, Shelbyville'));
        ob_start();
        $address->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<address', $output);
        $this->assertStringContainsString('456 Elm St', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $address = new HtmlAddress(new HtmlString(''));
        $this->assertStringContainsString('<address', $address->getHtml());
    }
}
