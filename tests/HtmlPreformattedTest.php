<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPreformatted;

class HtmlPreformattedTest extends TestCase {
    public function testInstance() {
        $pre = new HtmlPreformatted(new \Ksfraser\HTML\Elements\HtmlString('preformatted text'));
        $this->assertInstanceOf(HtmlPreformatted::class, $pre);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringContainsString('preformatted', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('preformatted');
        $preformatted = new HtmlPreformatted($mock);
        ob_start();
        $preformatted->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<pre', $output);
        $this->assertStringContainsString('preformatted', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $preformatted = new HtmlPreformatted($mock);
        $html = $preformatted->getHtml();
        $this->assertStringContainsString('<pre', $html);
        $this->assertStringEndsWith('</pre>', $html);
    }
}
