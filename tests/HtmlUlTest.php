<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlUl;

class HtmlUlTest extends TestCase {
    public function testInstance() {
        $ul = new HtmlUl(new HtmlString('ul content'));
        $this->assertInstanceOf(HtmlUl::class, $ul);
    }

    public function testTagIsUl() {
        $ul = new HtmlUl(new HtmlString('ul content'));
        $this->assertEquals('ul', $ul->tag);
    }

    public function testToStringReturnsExpectedHtml() {
        $ul = new HtmlUl(new HtmlString('ul content'));
        $html = (string)$ul;
        $this->assertStringContainsString('<ul', $html);
        $this->assertStringContainsString('ul content', $html);
        $this->assertStringContainsString('</ul>', $html);
    }

    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ul');
        $ul = new HtmlUl($mock);
        $html = $ul->getHtml();
        $this->assertStringContainsString('<ul', $html);
        $this->assertStringContainsString('ul', $html);
        $this->assertStringEndsWith('</ul>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('ul');
        $ul = new HtmlUl($mock);
        ob_start();
        $ul->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<ul', $output);
        $this->assertStringContainsString('ul', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $ul = new HtmlUl($mock);
        $html = $ul->getHtml();
        $this->assertStringContainsString('<ul', $html);
        $this->assertStringEndsWith('</ul>', $html);
    }
}
