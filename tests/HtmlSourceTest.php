<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlSource;

/**
 * class HtmlSourceTest
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlSourceTest extends TestCase {
/**
 * testConstructWithSrcAndType
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testConstructWithSrcAndType() {
        $src = new HtmlSource('audio.mp3', 'audio/mpeg');
        $html = $src->getHtml();
        $this->assertStringContainsString('<source', $html);
        $this->assertStringContainsString('src="audio.mp3"', $html);
        $this->assertStringContainsString('type="audio/mpeg"', $html);
    }

/**
 * testSetSrcAndTypeFluent
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testSetSrcAndTypeFluent() {
        $s = new HtmlSource();
        $s->setSrc('video.webm')->setType('video/webm');
        $html = $s->getHtml();
        $this->assertStringContainsString('src="video.webm"', $html);
        $this->assertStringContainsString('type="video/webm"', $html);
    }

/**
 * testEmptySourceRendersTag
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testEmptySourceRendersTag() {
        $s = new HtmlSource();
        $this->assertStringStartsWith('<source', $s->getHtml());
        // source is an empty/void element; ensure no closing tag is produced
        $this->assertStringNotContainsString('</source>', $s->getHtml());
    }
}
