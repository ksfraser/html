<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlOl;

/**
 * class HtmlOlTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlOlTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlOlTest extends TestCase {
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
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
/**
 * testInstance
 *
 * @return void
 */
function testInstance() {
        $ol = new HtmlOl(['item1', 'item2']);
        $this->assertInstanceOf(HtmlOl::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $ol);
    }

/**
 * testGetHtml
 *
 * @since 1.0.3 2026-02-21
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
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringContainsString('ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
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
        $mock->method('getHtml')->willReturn('ol');
        $ol = new HtmlOl($mock);
        ob_start();
        $ol->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ol', $output);
        $this->assertStringContainsString('ol', $output);
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
        $ol = new HtmlOl($mock);
        $html = $ol->getHtml();
        $this->assertStringContainsString('<ol', $html);
        $this->assertStringEndsWith('</ol>', $html);
    }
}
