<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSection;

class HtmlSectionTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringContainsString('section', $html);
        $this->assertStringEndsWith('</section>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('section');
        $section = new HtmlSection($mock);
        ob_start();
        $section->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<section', $output);
        $this->assertStringContainsString('section', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $section = new HtmlSection($mock);
        $html = $section->getHtml();
        $this->assertStringContainsString('<section', $html);
        $this->assertStringEndsWith('</section>', $html);
    }
}
