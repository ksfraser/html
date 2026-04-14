<?php
use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Elements\HtmlPicture;
use Ksfraser\HTML\Elements\HtmlImage;

/**
 * class HtmlPictureTest
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlPictureTest extends TestCase {
/**
 * testPictureWithSourcesAndImg
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
    public function testPictureWithSourcesAndImg() {
        $pic = new HtmlPicture();
        $pic->addSourceUrl('image.webp', 'image/webp')
            ->addSourceUrl('image.jpg', 'image/jpeg');

        $img = new HtmlImage('image.jpg');
        $img->setAlt('An image');
        $pic->addNested($img);

        $html = $pic->getHtml();
        $this->assertStringContainsString('<picture', $html);
        $this->assertStringContainsString('<source', $html);
        $this->assertStringContainsString('src="image.webp"', $html);
        $this->assertStringContainsString('type="image/webp"', $html);
        $this->assertStringContainsString('<img', $html);
        $this->assertStringContainsString('alt="An image"', $html);
    }
}
