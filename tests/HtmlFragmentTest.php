<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlFragment;
use Ksfraser\HTML\HtmlElementInterface;

class HtmlFragmentTest extends TestCase {
    public function testImplementsInterface() {
        $fragment = new HtmlFragment();
        $this->assertInstanceOf(HtmlElementInterface::class, $fragment);
    }

    public function testAddChildReturnsSelf() {
        $fragment = new HtmlFragment();
        $child = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $result = $fragment->addChild($child);
        $this->assertSame($fragment, $result);
    }

    public function testGetHtmlWithChild() {
        $fragment = new HtmlFragment();
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('<span>child</span>');
        $fragment->addChild($mock);
        $html = $fragment->getHtml();
        $this->assertStringContainsString('<span>child</span>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $fragment = new HtmlFragment();
        $mock = $this->getMockBuilder(HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('<div>frag</div>');
        $fragment->addChild($mock);
        ob_start();
        $fragment->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<div>frag</div>', $output);
    }

    public function testEdgeCasesEmptyFragment() {
        $fragment = new HtmlFragment();
        $html = $fragment->getHtml();
        $this->assertEquals('', $html);
    }
}
