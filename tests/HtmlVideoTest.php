<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlVideo;

/**
 * class HtmlVideoTest
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlVideoTest extends TestCase {
/**
 * testVideoWithSourceAndAttributes
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testVideoWithSourceAndAttributes() {
        $v = new HtmlVideo();
        $v->addSourceUrl('video.webm', 'video/webm')
          ->setControls(true)
          ->setAutoplay(false);

        $html = $v->getHtml();
        $this->assertStringContainsString('<video', $html);
        $this->assertStringContainsString('<source', $html);
        $this->assertStringContainsString('src="video.webm"', $html);
        $this->assertStringContainsString('type="video/webm"', $html);
        $this->assertStringContainsString('controls', $html);
    }
}
