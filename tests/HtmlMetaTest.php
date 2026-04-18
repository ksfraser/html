<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlMeta;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlMetaTest
 *
 * @since 1.0.5 2026-02-22
 */
class HtmlMetaTest extends TestCase {
/**
 * testMetaTagRendersCorrectly
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public /**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
/**
 * testMetaTagRendersCorrectly
 *
 * @return void
 */
function testMetaTagRendersCorrectly() {
        $meta = new HtmlMeta(new HtmlString(''));
        $meta->setAttribute('charset', 'UTF-8');
        $html = $meta->getHtml();
        $this->assertStringContainsString('<meta', $html);
        $this->assertStringContainsString('charset="UTF-8"', $html);
        $this->assertStringEndsWith(' />', $html);
    }

/**
 * testMetaTagWithoutAttributes
 *
 * @since 1.0.5 2026-02-22
 * @return void
 */
    public /**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
/**
 * testMetaTagWithoutAttributes
 *
 * @return void
 */
function testMetaTagWithoutAttributes() {
        $meta = new HtmlMeta(new HtmlString(''));
        $html = $meta->getHtml();
        $this->assertEquals('<meta />', $html);
    }
}
