<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlArticle;

class HtmlArticleTest extends TestCase {
    public function testGetHtml() {
        $article = new HtmlArticle(new HtmlString('Article content here'));
        $this->assertStringContainsString('<article', $article->getHtml());
        $this->assertStringContainsString('Article content here', $article->getHtml());
    }

    public function testToHtmlOutputsHtml() {
        $article = new HtmlArticle(new HtmlString('Another article'));
        ob_start();
        $article->toHtml();
        $output = ob_get_clean();
        $this->assertStringContainsString('<article', $output);
        $this->assertStringContainsString('Another article', $output);
    }

    public function testEdgeCasesEmptyContent() {
        $article = new HtmlArticle(new HtmlString(''));
        $this->assertStringContainsString('<article', $article->getHtml());
    }
}
