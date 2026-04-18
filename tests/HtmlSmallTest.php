<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSmall;

/**
 * class HtmlSmallTest
 *
 * @since 1.0.3 2026-02-21
 */
/**
 * HtmlSmallTest
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlSmallTest extends TestCase {
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
        $small = new HtmlSmall(new \Ksfraser\HTML\Elements\HtmlString('small text'));
        $this->assertInstanceOf(HtmlSmall::/**
 * testGetHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class, $small);
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
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringContainsString('small', $html);
        $this->assertStringEndsWith('</small>', $html);
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
        $mock->method('getHtml')->willReturn('small');
        $small = new HtmlSmall($mock);
        ob_start();
        $small->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<small', $output);
        $this->assertStringContainsString('small', $output);
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
        $small = new HtmlSmall($mock);
        $html = $small->getHtml();
        $this->assertStringContainsString('<small', $html);
        $this->assertStringEndsWith('</small>', $html);
    }
}
