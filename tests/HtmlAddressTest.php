<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlAddress;

/**
 * class HtmlAddressTest
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlAddressTest extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testGetHtml() {
        $address = new HtmlAddress(new HtmlString('123 Main St, Springfield'));
        $this->assertStringContainsString('<address', $address->getHtml());
        $this->assertStringContainsString('123 Main St', $address->getHtml());
    }

/**
 * testToHtmlOutputsHtml
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testToHtmlOutputsHtml() {
        $address = new HtmlAddress(new HtmlString('456 Elm St, Shelbyville'));
        ob_start();
        $address->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<address', $output);
        $this->assertStringContainsString('456 Elm St', $output);
    }

/**
 * testEdgeCasesEmptyContent
 *
 * @since 1.0.3 2026-02-21
 * @return void
 */
    public function testEdgeCasesEmptyContent() {
        $address = new HtmlAddress(new HtmlString(''));
        $this->assertStringContainsString('<address', $address->getHtml());
    }
}
