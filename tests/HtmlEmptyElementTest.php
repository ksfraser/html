<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlEmptyElement;
use Ksfraser\HTML\HtmlElement;

class HtmlEmptyElementTest extends TestCase {
    public function testExtendsHtmlElement() {
        $empty = new HtmlEmptyElement();
        $this->assertInstanceOf(HtmlElement::class, $empty);
    }

    public function testGetHtmlEmptyTag() {
        $empty = new HtmlEmptyElement();
        $empty->setTag('hr');
        $html = $empty->getHtml();
        $this->assertStringStartsWith('<hr', $html);
        $this->assertStringEndsWith('>', $html);
        $this->assertStringNotContainsString('</hr>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $empty = new HtmlEmptyElement();
        $empty->setTag('img');
        ob_start();
        $empty->toHtml();
        $output = ob_get_clean();
        $this->assertStringStartsWith('<img', $output);
    }

    public function testEdgeCasesNoTag() {
        $empty = new HtmlEmptyElement();
        $html = $empty->getHtml();
        $this->assertStringStartsWith('<', $html);
    }
}
