<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * SemanticElementsTraitTest - FR-014
 *
 * Comprehensive test suite for HTML5 semantic elements
 * Tests creation of semantic markup for improved SEO and accessibility
 *
 *
 * @group FR-014
 * @group Semantic
 * @since 1.0.5 2026-03-30
 */
class SemanticElementsTraitTest extends TestCase
{
    // ============================================================================
    // DOCUMENT STRUCTURE TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since 1.0.5 2026-03-30
     */
    public function header_creates_header_element()
    {
        $header = HtmlElement::header();
        
        $this->assertEquals('header', $header->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function footer_creates_footer_element()
    {
        $footer = HtmlElement::footer();
        
        $this->assertEquals('footer', $footer->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function main_creates_main_element()
    {
        $main = HtmlElement::main();
        
        $this->assertEquals('main', $main->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function nav_creates_nav_element()
    {
        $nav = HtmlElement::nav();
        
        $this->assertEquals('nav', $nav->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function article_creates_article_element()
    {
        $article = HtmlElement::article();
        
        $this->assertEquals('article', $article->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function section_creates_section_element()
    {
        $section = HtmlElement::section();
        
        $this->assertEquals('section', $section->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group structure
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function aside_creates_aside_element()
    {
        $aside = HtmlElement::aside();
        
        $this->assertEquals('aside', $aside->getTag());
    }

    // ============================================================================
    // CONTENT STRUCTURE TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function figure_creates_figure_element()
    {
        $figure = HtmlElement::figure();
        
        $this->assertEquals('figure', $figure->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function figcaption_creates_figcaption_element()
    {
        $caption = HtmlElement::figcaption('Image caption');
        
        $this->assertEquals('figcaption', $caption->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function blockquote_creates_blockquote_element()
    {
        $quote = HtmlElement::blockquote('Quote text');
        
        $this->assertEquals('blockquote', $quote->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function blockquote_with_cite_adds_cite_attribute()
    {
        $quote = HtmlElement::blockquote('Quote', 'https://example.com');
        
        $this->assertEquals('https://example.com', $quote->getAttributeValue('cite'));
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function cite_creates_cite_element()
    {
        $cite = HtmlElement::cite('Author Name');
        
        $this->assertEquals('cite', $cite->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function code_creates_code_element()
    {
        $code = HtmlElement::code('var x = 5;');
        
        $this->assertEquals('code', $code->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function pre_creates_pre_element()
    {
        $pre = HtmlElement::pre('Preformatted text');
        
        $this->assertEquals('pre', $pre->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function kbd_creates_kbd_element()
    {
        $kbd = HtmlElement::kbd('Ctrl+C');
        
        $this->assertEquals('kbd', $kbd->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function samp_creates_samp_element()
    {
        $samp = HtmlElement::samp('Sample output');
        
        $this->assertEquals('samp', $samp->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group content
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function var_creates_var_element()
    {
        $var = HtmlElement::var('variable_name');
        
        $this->assertEquals('var', $var->getTag());
    }

    // ============================================================================
    // TEXT FORMATTING TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function strong_creates_strong_element()
    {
        $strong = HtmlElement::strong('Important text');
        
        $this->assertEquals('strong', $strong->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function em_creates_em_element()
    {
        $em = HtmlElement::em('Emphasized text');
        
        $this->assertEquals('em', $em->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function mark_creates_mark_element()
    {
        $mark = HtmlElement::mark('Highlighted text');
        
        $this->assertEquals('mark', $mark->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function small_creates_small_element()
    {
        $small = HtmlElement::small('Small text');
        
        $this->assertEquals('small', $small->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function del_creates_del_element()
    {
        $del = HtmlElement::del('Deleted text');
        
        $this->assertEquals('del', $del->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function ins_creates_ins_element()
    {
        $ins = HtmlElement::ins('Inserted text');
        
        $this->assertEquals('ins', $ins->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function sub_creates_sub_element()
    {
        $sub = HtmlElement::sub('Subscript');
        
        $this->assertEquals('sub', $sub->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function sup_creates_sup_element()
    {
        $sup = HtmlElement::sup('Superscript');
        
        $this->assertEquals('sup', $sup->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group text
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function abbr_creates_abbr_element()
    {
        $abbr = HtmlElement::abbr('HTML', 'HyperText Markup Language');
        
        $this->assertEquals('abbr', $abbr->getTag());
        $this->assertEquals('HyperText Markup Language', $abbr->getAttributeValue('title'));
    }

    // ============================================================================
    // METADATA TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group metadata
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function time_creates_time_element()
    {
        $time = HtmlElement::time('March 29, 2026');
        
        $this->assertEquals('time', $time->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group metadata
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function time_with_datetime_adds_datetime_attribute()
    {
        $time = HtmlElement::time('Today', '2026-03-29');
        
        $this->assertEquals('2026-03-29', $time->getAttributeValue('datetime'));
    }

    /**
     * @test
     * @group semantic
     * @group metadata
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function address_creates_address_element()
    {
        $address = HtmlElement::address('Contact info');
        
        $this->assertEquals('address', $address->getTag());
    }

    // ============================================================================
    // MEDIA ELEMENT TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function video_creates_video_element()
    {
        $video = HtmlElement::video('video.mp4');
        
        $this->assertEquals('video', $video->getTag());
        $this->assertEquals('video.mp4', $video->getAttributeValue('src'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function video_with_controls_adds_controls_attribute()
    {
        $video = HtmlElement::video('video.mp4', true);
        
        $this->assertEquals('controls', $video->getAttributeValue('controls'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function video_with_autoplay_adds_autoplay_attribute()
    {
        $video = HtmlElement::video('video.mp4', false, true);
        
        $this->assertEquals('autoplay', $video->getAttributeValue('autoplay'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function audio_creates_audio_element()
    {
        $audio = HtmlElement::audio('audio.mp3');
        
        $this->assertEquals('audio', $audio->getTag());
        $this->assertEquals('audio.mp3', $audio->getAttributeValue('src'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function audio_with_controls_adds_controls_attribute()
    {
        $audio = HtmlElement::audio('audio.mp3', true);
        
        $this->assertEquals('controls', $audio->getAttributeValue('controls'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function source_creates_source_element()
    {
        $source = HtmlElement::source('video.webm', 'video/webm');
        
        $this->assertEquals('source', $source->getTag());
        $this->assertEquals('video.webm', $source->getAttributeValue('src'));
        $this->assertEquals('video/webm', $source->getAttributeValue('type'));
    }

    /**
     * @test
     * @group semantic
     * @group media
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function track_creates_track_element()
    {
        $track = HtmlElement::track('subtitles.vtt', 'captions');
        
        $this->assertEquals('track', $track->getTag());
        $this->assertEquals('subtitles.vtt', $track->getAttributeValue('src'));
        $this->assertEquals('captions', $track->getAttributeValue('kind'));
    }

    // ============================================================================
    // LIST TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group lists
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function description_list_creates_dl_element()
    {
        $dl = HtmlElement::descriptionList();
        
        $this->assertEquals('dl', $dl->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group lists
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function description_term_creates_dt_element()
    {
        $dt = HtmlElement::descriptionTerm('Term');
        
        $this->assertEquals('dt', $dt->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group lists
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function description_definition_creates_dd_element()
    {
        $dd = HtmlElement::descriptionDefinition('Definition');
        
        $this->assertEquals('dd', $dd->getTag());
    }

    // ============================================================================
    // INTERACTIVE ELEMENT TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group interactive
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function details_creates_details_element()
    {
        $details = HtmlElement::details();
        
        $this->assertEquals('details', $details->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group interactive
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function summary_creates_summary_element()
    {
        $summary = HtmlElement::summary('Click to expand');
        
        $this->assertEquals('summary', $summary->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group interactive
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function dialog_creates_dialog_element()
    {
        $dialog = HtmlElement::dialog();
        
        $this->assertEquals('dialog', $dialog->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group interactive
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function dialog_with_open_attribute()
    {
        $dialog = HtmlElement::dialog(true);
        
        $this->assertEquals('open', $dialog->getAttributeValue('open'));
    }

    // ============================================================================
    // SCRIPTING ELEMENT TESTS
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group scripting
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function noscript_creates_noscript_element()
    {
        $noscript = HtmlElement::noscript('JavaScript is disabled');
        
        $this->assertEquals('noscript', $noscript->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group scripting
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function canvas_creates_canvas_element()
    {
        $canvas = HtmlElement::canvas();
        
        $this->assertEquals('canvas', $canvas->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group scripting
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function canvas_with_dimensions()
    {
        $canvas = HtmlElement::canvas(500, 300);
        
        $this->assertEquals('500', $canvas->getAttributeValue('width'));
        $this->assertEquals('300', $canvas->getAttributeValue('height'));
    }

    /**
     * @test
     * @group semantic
     * @group scripting
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function svg_creates_svg_element()
    {
        $svg = HtmlElement::svg();
        
        $this->assertEquals('svg', $svg->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group scripting
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function svg_with_viewbox()
    {
        $svg = HtmlElement::svg(100, 100);
        
        $this->assertEquals('0 0 100 100', $svg->getAttributeValue('viewBox'));
    }

    // ============================================================================
    // DOCUMENT ROOT TEST
    // ============================================================================

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function html_creates_html_element()
    {
        $html = HtmlElement::htmlElement('en');
        
        $this->assertEquals('html', $html->getTag());
        $this->assertEquals('en', $html->getAttributeValue('lang'));
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function head_creates_head_element()
    {
        $head = HtmlElement::head();
        
        $this->assertEquals('head', $head->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function body_creates_body_element()
    {
        $body = HtmlElement::body();
        
        $this->assertEquals('body', $body->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function title_creates_title_element()
    {
        $title = HtmlElement::title('Page Title');
        
        $this->assertEquals('title', $title->getTag());
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function meta_creates_meta_element()
    {
        $meta = HtmlElement::meta('viewport', 'width=device-width, initial-scale=1');
        
        $this->assertEquals('meta', $meta->getTag());
        $this->assertEquals('viewport', $meta->getAttributeValue('name'));
        $this->assertEquals('width=device-width, initial-scale=1', $meta->getAttributeValue('content'));
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function link_creates_link_element()
    {
        $link = HtmlElement::link('stylesheet', 'style.css');
        
        $this->assertEquals('link', $link->getTag());
        $this->assertEquals('stylesheet', $link->getAttributeValue('rel'));
        $this->assertEquals('style.css', $link->getAttributeValue('href'));
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function script_creates_script_element()
    {
        $script = HtmlElement::script('script.js');
        
        $this->assertEquals('script', $script->getTag());
        $this->assertEquals('script.js', $script->getAttributeValue('src'));
    }

    /**
     * @test
     * @group semantic
     * @group document
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public function style_creates_style_element()
    {
        $style = HtmlElement::style('body { margin: 0; }');
        
        $this->assertEquals('style', $style->getTag());
    }
}
