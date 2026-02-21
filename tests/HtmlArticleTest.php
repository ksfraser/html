<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlArticle;

class HtmlArticleTest extends TestCase {
    public function testGetHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('article');
        $article = new HtmlArticle($mock);
        $html = $article->getHtml();
        $this->assertStringContainsString('<article', $html);
        $this->assertStringContainsString('article', $html);
        $this->assertStringEndsWith('</article>', $html);
    }

    public function testToHtmlOutputsHtml() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('article');
        $article = new HtmlArticle($mock);
        ob_start();
        $article->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<article', $output);
        $this->assertStringContainsString('article', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $mock = $this->getMockBuilder(\Ksfraser\HTML\HtmlElementInterface::class)->getMock();
        $mock->method('getHtml')->willReturn('');
        $article = new HtmlArticle($mock);
        $html = $article->getHtml();
        $this->assertStringContainsString('<article', $html);
        $this->assertStringEndsWith('</article>', $html);
    }
}
