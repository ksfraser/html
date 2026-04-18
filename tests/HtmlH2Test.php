<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlH2;

/**
 * class HtmlH2Test
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlH2Test
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlH2Test extends TestCase {
/**
 * testGetHtml
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
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
/**
 * testGetHtml
 *
 * @return void
 */
function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringContainsString('h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
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
 * @since v1.0.0 2026-04-14
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
/**
 * testToHtmlOutputsHtml
 *
 * @return void
 */
function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('h2');
        $h2 = new HtmlH2($mock);
        ob_start();
        $h2->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<h2', $output);
        $this->assertStringContainsString('h2', $output);
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
 * @since v1.0.0 2026-04-14
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
/**
 * testEdgeCasesEmptyContent
 *
 * @return void
 */
function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::/**
 * getMock
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $h2 = new HtmlH2($mock);
        $html = $h2->getHtml();
        $this->assertStringContainsString('<h2', $html);
        $this->assertStringEndsWith('</h2>', $html);
    }
}
