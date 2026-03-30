<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;

/**
 * SemanticElementsTrait - FR-014
 * Provides factory methods for HTML5 semantic elements
 *
 * Static factory methods for semantic markup:
 * - Structure: header(), nav(), main(), section(), article(), aside(), footer()
 * - Content: heading(), paragraph(), strong(), em(), mark(), code(), pre(), blockquote(), cite(), address(), time()
 * - Media: figure(), figcaption(), image(), picture(), audio(), video(), source()
 * - Interactive: details(), summary(), dialog()
 * - Progress: progress(), meter()
 * - Lists: unorderedList(), orderedList(), listItem(), definitionList(), definitionTerm(), definitionDescription()
 * - Tables: table(), tableHead(), tableBody(), tableFoot(), tableRow(), tableData(), tableHeader(), tableCaption(), tableColumn(), tableColumnGroup()
 * - Forms: fieldset(), legend()
 *
 * Integration with previous traits:
 * - CSSManagementTrait: Bootstrap classes for semantic elements
 * - AriaAttributeTrait: ARIA attributes for accessibility
 * - DataAttributeTrait: Data attributes for JS integration
 * - EventHandlerTrait: Event binding for interactive elements
 *
 * Usage:
 *   $article = HtmlElement::article()
 *       ->addNested(HtmlElement::heading('Article Title', 1))
 *       ->addNested(HtmlElement::paragraph('Content'));
 *   
 *   $figure = HtmlElement::figure()
 *       ->addNested(HtmlElement::image('photo.jpg', 'Photo'))
 *       ->addNested(HtmlElement::figcaption('Caption'));
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0
 */
trait SemanticElementsTrait
{
    // ========================================================================
    // STRUCTURAL SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a header element (page or section header)
     *
     * @return HtmlElement
     */
    public static function header(): HtmlElement
    {
        return new self('header');
    }

    /**
     * Create a nav element (navigation section)
     *
     * @return HtmlElement
     */
    public static function nav(): HtmlElement
    {
        return new self('nav');
    }

    /**
     * Create a main element (main content area)
     *
     * @return HtmlElement
     */
    public static function main(): HtmlElement
    {
        return new self('main');
    }

    /**
     * Create a section element
     *
     * @param string|null $id Section ID
     * @return HtmlElement
     */
    public static function section(?string $id = null): HtmlElement
    {
        $section = new self('section');
        if ($id !== null) {
            $section->setAttribute('id', $id);
        }
        return $section;
    }

    /**
     * Create an article element
     *
     * @return HtmlElement
     */
    public static function article(): HtmlElement
    {
        return new self('article');
    }

    /**
     * Create an aside element (sidebar/supplementary content)
     *
     * @return HtmlElement
     */
    public static function aside(): HtmlElement
    {
        return new self('aside');
    }

    /**
     * Create a footer element
     *
     * @return HtmlElement
     */
    public static function footer(): HtmlElement
    {
        return new self('footer');
    }

    // ========================================================================
    // TEXT & CONTENT SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a heading element (h1-h6)
     *
     * @param string $text Heading text
     * @param int $level Heading level (1-6, default 1)
     * @return HtmlElement
     */
    public static function heading(string $text = '', int $level = 1): HtmlElement
    {
        $level = min(max($level, 1), 6);
        return new self('h' . $level, $text);
    }

    /**
     * Create a paragraph element
     *
     * @param string $text Paragraph text
     * @return HtmlElement
     */
    public static function paragraph(string $text = ''): HtmlElement
    {
        return new self('p', $text);
    }

    /**
     * Create a strong element (strong importance)
     *
     * @param string $text Text content
     * @return HtmlElement
     */
    public static function strong(string $text = ''): HtmlElement
    {
        return new self('strong', $text);
    }

    /**
     * Create an em element (emphasis)
     *
     * @param string $text Text content
     * @return HtmlElement
     */
    public static function em(string $text = ''): HtmlElement
    {
        return new self('em', $text);
    }

    /**
     * Create a mark element (highlighted/marked text)
     *
     * @param string $text Text content
     * @return HtmlElement
     */
    public static function mark(string $text = ''): HtmlElement
    {
        return new self('mark', $text);
    }

    /**
     * Create a code element
     *
     * @param string $text Code content
     * @return HtmlElement
     */
    public static function code(string $text = ''): HtmlElement
    {
        return new self('code', $text);
    }

    /**
     * Create a pre element (preformatted text)
     *
     * @param string $text Preformatted content (optional)
     * @return HtmlElement
     */
    public static function pre(string $text = ''): HtmlElement
    {
        $pre = new self('pre');
        if ($text !== '') {
            // Store as content for literal rendering
            $pre->content = $text;
        }
        return $pre;
    }

    /**
     * Create a small element (side comments, fine print)
     *
     * @param string $text Small text
     * @return HtmlElement
     */
    public static function small(string $text = ''): HtmlElement
    {
        return new self('small', $text);
    }

    /**
     * Create a blockquote element
     *
     * @param string $text Quote text
     * @param string|null $cite Citation URL
     * @return HtmlElement
     */
    public static function blockquote(string $text = '', ?string $cite = null): HtmlElement
    {
        $bq = new self('blockquote', $text);
        if ($cite !== null) {
            $bq->setAttribute('cite', $cite);
        }
        return $bq;
    }

    /**
     * Create a cite element (title of work)
     *
     * @param string $text Citation text
     * @return HtmlElement
     */
    public static function cite(string $text = ''): HtmlElement
    {
        return new self('cite', $text);
    }

    /**
     * Create an address element
     *
     * @param string $text Address content
     * @return HtmlElement
     */
    public static function address(string $text = ''): HtmlElement
    {
        return new self('address', $text);
    }

    /**
     * Create a time element
     *
     * @param string $text Display text
     * @param string|null $datetime date-time string
     * @return HtmlElement
     */
    public static function time(string $text = '', ?string $datetime = null): HtmlElement
    {
        $time = new self('time', $text);
        if ($datetime !== null) {
            $time->setAttribute('datetime', $datetime);
        }
        return $time;
    }

    // ========================================================================
    // MEDIA & FIGURE SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a figure element
     *
     * @return HtmlElement
     */
    public static function figure(): HtmlElement
    {
        return new self('figure');
    }

    /**
     * Create a figcaption element
     *
     * @param string $text Caption text
     * @return HtmlElement
     */
    public static function figcaption(string $text = ''): HtmlElement
    {
        return new self('figcaption', $text);
    }

    /**
     * Create an image element
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
     */
    public static function image(string $src, string $alt = ''): HtmlElement
    {
        $img = new self('img');
        $img->setAttribute('src', $src);
        if ($alt !== '') {
            $img->setAttribute('alt', $alt);
        }
        return $img;
    }

    /**
     * Create a responsive image element
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
     */
    public static function imageResponsive(string $src, string $alt = ''): HtmlElement
    {
        $img = self::image($src, $alt);
        $img->addCSSClass('img-fluid');
        return $img;
    }

    /**
     * Create a thumbnail image element
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
     */
    public static function imageThumbnail(string $src, string $alt = ''): HtmlElement
    {
        $img = self::image($src, $alt);
        $img->addCSSClass('img-thumbnail');
        return $img;
    }

    /**
     * Create a picture element (for responsive images)
     *
     * @return HtmlElement
     */
    public static function picture(): HtmlElement
    {
        return new self('picture');
    }

    /**
     * Create an audio element
     *
     * @param string $src Audio source
     * @param bool $controls Show audio controls
     * @return HtmlElement
     */
    public static function audio(string $src = '', bool $controls = false): HtmlElement
    {
        $audio = new self('audio');
        if ($src !== '') {
            $audio->setAttribute('src', $src);
        }
        if ($controls) {
            $audio->setAttribute('controls', 'controls');
        }
        return $audio;
    }

    /**
     * Create a video element
     *
     * @param string $src Video source
     * @param bool $controls Show video controls
     * @return HtmlElement
     */
    public static function video(string $src = '', bool $controls = false): HtmlElement
    {
        $video = new self('video');
        if ($src !== '') {
            $video->setAttribute('src', $src);
        }
        if ($controls) {
            $video->setAttribute('controls', 'controls');
        }
        return $video;
    }

    /**
     * Create a source element (for audio/video)
     *
     * @param string $src Source URL
     * @param string $type MIME type
     * @return HtmlElement
     */
    public static function source(string $src, string $type): HtmlElement
    {
        $source = new self('source');
        $source->setAttribute('src', $src);
        $source->setAttribute('type', $type);
        return $source;
    }

    // ========================================================================
    // INTERACTIVE SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a details element (expandable information)
     *
     * @param bool $open Initially open
     * @return HtmlElement
     */
    public static function details(bool $open = false): HtmlElement
    {
        $details = new self('details');
        if ($open) {
            $details->setAttribute('open', 'open');
        }
        return $details;
    }

    /**
     * Create a summary element (details summary/header)
     *
     * @param string $text Summary text
     * @return HtmlElement
     */
    public static function summary(string $text = ''): HtmlElement
    {
        return new self('summary', $text);
    }

    /**
     * Create a dialog element
     *
     * @param bool $open Initially open
     * @return HtmlElement
     */
    public static function dialog(bool $open = false): HtmlElement
    {
        $dialog = new self('dialog');
        if ($open) {
            $dialog->setAttribute('open', 'open');
        }
        return $dialog;
    }

    // ========================================================================
    // PROGRESS & METER SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a progress element
     *
     * @param int|null $value Current progress value
     * @param int|null $max Maximum value
     * @return HtmlElement
     */
    public static function progress(?int $value = null, ?int $max = null): HtmlElement
    {
        $progress = new self('progress');
        if ($value !== null) {
            $progress->setAttribute('value', (string)$value);
        }
        if ($max !== null) {
            $progress->setAttribute('max', (string)$max);
        }
        return $progress;
    }

    /**
     * Create a meter element
     *
     * @param int|null $value Current value
     * @param int|null $min Minimum value
     * @param int|null $max Maximum value
     * @param int|null $low Low threshold
     * @param int|null $high High threshold
     * @return HtmlElement
     */
    public static function meter(?int $value = null, ?int $min = null, ?int $max = null, ?int $low = null, ?int $high = null): HtmlElement
    {
        $meter = new self('meter');
        if ($value !== null) {
            $meter->setAttribute('value', (string)$value);
        }
        if ($min !== null) {
            $meter->setAttribute('min', (string)$min);
        }
        if ($max !== null) {
            $meter->setAttribute('max', (string)$max);
        }
        if ($low !== null) {
            $meter->setAttribute('low', (string)$low);
        }
        if ($high !== null) {
            $meter->setAttribute('high', (string)$high);
        }
        return $meter;
    }

    // ========================================================================
    // LIST SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create an unordered list element
     *
     * @return HtmlElement
     */
    public static function unorderedList(): HtmlElement
    {
        return new self('ul');
    }

    /**
     * Create an ordered list element
     *
     * @param int|null $start Starting number
     * @return HtmlElement
     */
    public static function orderedList(?int $start = null): HtmlElement
    {
        $ol = new self('ol');
        if ($start !== null) {
            $ol->setAttribute('start', (string)$start);
        }
        return $ol;
    }

    /**
     * Create a list item element
     *
     * @param string $text Item text
     * @return HtmlElement
     */
    public static function listItem(string $text = ''): HtmlElement
    {
        return new self('li', $text);
    }

    /**
     * Create a definition list element
     *
     * @return HtmlElement
     */
    public static function definitionList(): HtmlElement
    {
        return new self('dl');
    }

    /**
     * Create a definition term element
     *
     * @param string $text Term text
     * @return HtmlElement
     */
    public static function definitionTerm(string $text = ''): HtmlElement
    {
        return new self('dt', $text);
    }

    /**
     * Create a definition description element
     *
     * @param string $text Description text
     * @return HtmlElement
     */
    public static function definitionDescription(string $text = ''): HtmlElement
    {
        return new self('dd', $text);
    }

    // ========================================================================
    // TABLE SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a table element
     *
     * @return HtmlElement
     */
    public static function table(): HtmlElement
    {
        return new self('table');
    }

    /**
     * Create a table head element
     *
     * @return HtmlElement
     */
    public static function tableHead(): HtmlElement
    {
        return new self('thead');
    }

    /**
     * Create a table body element
     *
     * @return HtmlElement
     */
    public static function tableBody(): HtmlElement
    {
        return new self('tbody');
    }

    /**
     * Create a table foot element
     *
     * @return HtmlElement
     */
    public static function tableFoot(): HtmlElement
    {
        return new self('tfoot');
    }

    /**
     * Create a table row element
     *
     * @return HtmlElement
     */
    public static function tableRow(): HtmlElement
    {
        return new self('tr');
    }

    /**
     * Create a table data cell element
     *
     * @param string $text Cell content
     * @return HtmlElement
     */
    public static function tableData(string $text = ''): HtmlElement
    {
        return new self('td', $text);
    }

    /**
     * Create a table header cell element
     *
     * @param string $text Header content
     * @return HtmlElement
     */
    public static function tableHeader(string $text = ''): HtmlElement
    {
        return new self('th', $text);
    }

    /**
     * Create a table caption element
     *
     * @param string $text Caption text
     * @return HtmlElement
     */
    public static function tableCaption(string $text = ''): HtmlElement
    {
        return new self('caption', $text);
    }

    /**
     * Create a table column element
     *
     * @return HtmlElement
     */
    public static function tableColumn(): HtmlElement
    {
        return new self('col');
    }

    /**
     * Create a table column group element
     *
     * @return HtmlElement
     */
    public static function tableColumnGroup(): HtmlElement
    {
        return new self('colgroup');
    }

    // ========================================================================
    // FORM SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a fieldset element
     *
     * @return HtmlElement
     */
    public static function fieldset(): HtmlElement
    {
        return new self('fieldset');
    }

    /**
     * Create a legend element
     *
     * @param string $text Legend text
     * @return HtmlElement
     */
    public static function legend(string $text = ''): HtmlElement
    {
        return new self('legend', $text);
    }
}
