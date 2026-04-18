<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * class SemanticFactoryTest
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class SemanticFactoryTest extends TestCase {
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
/**
 * testVideoFactoryUsesHtmlVideoMethods
 *
 * @return void
 */
function testVideoFactoryUsesHtmlVideoMethods() {
        $v = HtmlElement::video('movie.mp4', true);
        $html = $v->getHtml();
        $this->assertStringContainsString('<video', $html);
        $this->assertStringContainsString('src="movie.mp4"', $html);
        $this->assertStringContainsString('controls', $html);
    }

/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
/**
 * testSourceFactoryReturnsHtmlSource
 *
 * @return void
 */
function testSourceFactoryReturnsHtmlSource() {
        $s = HtmlElement::source('audio.mp3', 'audio/mpeg');
        $html = $s->getHtml();
        $this->assertStringContainsString('<source', $html);
        $this->assertStringContainsString('src="audio.mp3"', $html);
        $this->assertStringContainsString('type="audio/mpeg"', $html);
    }

/**
 * testImageFactorySetsAltAndSrc
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
/**
 * testImageFactorySetsAltAndSrc
 *
 * @return void
 */
function testImageFactorySetsAltAndSrc() {
        $i = HtmlElement::image('pic.jpg', 'alt text');
        $html = $i->getHtml();
        $this->assertStringContainsString('src="pic.jpg"', $html);
        $this->assertStringContainsString('alt="alt text"', $html);
    }
}
