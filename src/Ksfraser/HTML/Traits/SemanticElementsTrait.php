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
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0.5 2026-03-30
 */
trait SemanticElementsTrait
{
    /**
     * Resolve an element class for a semantic tag and instantiate it if present.
     * Tries candidate class names under Ksfraser\\HTML\\Elements\\, then falls back to `new static()`.
     *
     * @return HtmlElement
 * @param string $tag
 * @param mixed $args
 * @since v2.0.1 2026-04-14
     */
    protected static function element(string $tag, ...$args): HtmlElement
    {
        $candidates = [];
        // Common naming patterns
        $studly = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $tag)));
        // Prefer classes named Html{Studly} (HtmlDiv, HtmlParagraph)
        $candidates[] = 'Html' . $studly;
        // Short forms: HtmlP, HtmlIMG, HtmlUL etc.
        $candidates[] = 'Html' . strtoupper($tag);
        // Also try the plain studly name (Badge, Button)
        $candidates[] = $studly;

        // Explicit common aliases
        $aliases = [
            'ul' => ['UnorderedList','Ul','UnorderedList'],
            'ol' => ['OrderedList','Ol'],
            'li' => ['Li','ListItem'],
            'img' => ['Img','Image'],
            'p' => ['Paragraph','P'],
            'h1' => ['Heading1','HtmlHeading1'],
        ];
        if (isset($aliases[$tag])) {
            foreach ($aliases[$tag] as $a) {
                $candidates[] = 'Html' . $a;
                $candidates[] = $a;
            }
        }

        $prefixes = [
            'Ksfraser\\HTML\\Elements\\',
            'Ksfraser\\HTML\\',
            'Ksfraser\\HTML\\Button\\',
        ];

        // Normalize args: convert strings/scalars to HtmlString instances
        $normalizedArgs = [];
        foreach ($args as $a) {
            if (is_string($a) || is_scalar($a)) {
                $normalizedArgs[] = new \Ksfraser\HTML\Elements\HtmlString($a);
            } else {
                $normalizedArgs[] = $a;
            }
        }

        foreach ($candidates as $c) {
            foreach ($prefixes as $pref) {
                $fqcn = $pref . $c;
                if (class_exists($fqcn)) {
                    try {
                        $ref = new \ReflectionClass($fqcn);
                        $ctor = $ref->getConstructor();
                        // If constructor requires no parameters, instantiate without args
                        if ($ctor === null || $ctor->getNumberOfRequiredParameters() === 0) {
                            return $ref->newInstance();
                        }
                        // If no normalized args provided, default to empty HtmlString
                        if (count($normalizedArgs) === 0) {
                            $normalizedArgs[] = new \Ksfraser\HTML\Elements\HtmlString('');
                        }
                        return $ref->newInstanceArgs($normalizedArgs);
                    } catch (\ReflectionException $e) {
                        // Fall back to direct instantiation
                        if (count($normalizedArgs) === 0) {
                            return new $fqcn(new \Ksfraser\HTML\Elements\HtmlString(''));
                        }
                        return new $fqcn(...$normalizedArgs);
                    }
                }
            }
        }

        // Last resort: preserve previous behaviour but use late static binding
        return new static($tag, ...$normalizedArgs);
    }
    // ========================================================================
    // STRUCTURAL SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a header element (page or section header)
     *
     * @return HtmlElement
 * @since 1.0.5 2026-03-30
     */
    public static function header(): HtmlElement
    {
        return self::element('header');
    }

    /**
     * Create a nav element (navigation section)
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function nav(): HtmlElement
    {
        return self::element('nav');
    }

    /**
     * Create a main element (main content area)
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function main(): HtmlElement
    {
        return self::element('main', '');
    }

    /**
     * Create a section element
     *
     * @return HtmlElement
 * @param ?string $id
 * @since v2.0.1 2026-04-14
     */
    public static function section(?string $id = null): HtmlElement
    {
        $section = self::element('section', '');
        if ($id !== null) {
            if (method_exists($section, 'setId')) {
                $section->setId($id);
            } else {
                $section->setAttribute('id', $id);
            }
        }
        return $section;
    }

    /**
     * Create an article element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function article(): HtmlElement
    {
        return self::element('article');
    }

    /**
     * Create a generic div element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function div(): HtmlElement
    {
        return self::element('div');
    }

    /**
     * Create an aside element (sidebar/supplementary content)
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function aside(): HtmlElement
    {
        return self::element('aside');
    }

    /**
     * Create a footer element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function footer(): HtmlElement
    {
        return self::element('footer');
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
 * @since v1.0.5 2026-04-14
     */
    public static function heading(string $text = '', int $level = 1): HtmlElement
    {
        $level = min(max($level, 1), 6);
        return self::element('h' . $level, $text);
    }

    /**
     * Create a paragraph element
     *
     * @param string $text Paragraph text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function paragraph(string $text = ''): HtmlElement
    {
        return self::element('p', $text);
    }

    /**
     * Create a strong element (strong importance)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function strong(string $text = ''): HtmlElement
    {
        return self::element('strong', $text);
    }

    /**
     * Create an em element (emphasis)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function em(string $text = ''): HtmlElement
    {
        return self::element('em', $text);
    }

    /**
     * Create a mark element (highlighted/marked text)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function mark(string $text = ''): HtmlElement
    {
        return self::element('mark', $text);
    }

    /**
     * Create a del element (deleted text)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function del(string $text = ''): HtmlElement
    {
        return self::element('del', $text);
    }

    /**
     * Create an ins element (inserted text)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function ins(string $text = ''): HtmlElement
    {
        return self::element('ins', $text);
    }

    /**
     * Create a sub element (subscript)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function sub(string $text = ''): HtmlElement
    {
        return self::element('sub', $text);
    }

    /**
     * Create a sup element (superscript)
     *
     * @param string $text Text content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function sup(string $text = ''): HtmlElement
    {
        return self::element('sup', $text);
    }

    /**
     * Create an abbr element (abbreviation)
     *
     * @param string $text Abbreviation text
     * @param string $title Title attribute (expanded form)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function abbr(string $text = '', string $title = ''): HtmlElement
    {
        $abbr = self::element('abbr', $text);
        if ($title !== '') {
            if (method_exists($abbr, 'setTitle')) {
                $abbr->setTitle($title);
            } else {
                $abbr->setAttribute('title', $title);
            }
        }
        return $abbr;
    }

    /**
     * Create a kbd element (user input)
     *
     * @param string $text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function kbd(string $text = ''): HtmlElement
    {
        return self::element('kbd', $text);
    }

    /**
     * Create a code element
     *
     * @param string $text Code content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function code(string $text = ''): HtmlElement
    {
        return self::element('code', $text);
    }

    /**
     * Create a samp element (sample output)
     *
     * @param string $text Sample text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function samp(string $text = ''): HtmlElement
    {
        return self::element('samp', $text);
    }

    /**
     * Create a var element (variable name)
     *
     * @param string $text Variable name
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function var(string $text = ''): HtmlElement
    {
        return self::element('var', $text);
    }
    /**
     * Create a pre element (preformatted text)
     *
     * @param string $text Preformatted content (optional)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function pre(string $text = ''): HtmlElement
    {
        return self::element('pre', $text);
    }

    /**
     * Create a small element (side comments, fine print)
     *
     * @param string $text Small text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function small(string $text = ''): HtmlElement
    {
        return self::element('small', $text);
    }

    /**
     * Create a blockquote element
     *
     * @return HtmlElement
 * @param string $text
 * @param ?string $cite
 * @since v2.0.1 2026-04-14
     */
    public static function blockquote(string $text = '', ?string $cite = null): HtmlElement
    {
        $bq = self::element('blockquote', $text);
        if ($cite !== null) {
            if (method_exists($bq, 'setCite')) {
                $bq->setCite($cite);
            } else {
                $bq->setAttribute('cite', $cite);
            }
        }
        return $bq;
    }

    /**
     * Create a cite element (title of work)
     *
     * @param string $text Citation text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function cite(string $text = ''): HtmlElement
    {
        return self::element('cite', $text);
    }

    /**
     * Create an address element
     *
     * @param string $text Address content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function address(string $text = ''): HtmlElement
    {
        return self::element('address', $text);
    }

    /**
     * Create a time element
     *
     * @return HtmlElement
 * @param string $text
 * @param ?string $datetime
 * @since v2.0.1 2026-04-14
     */
    public static function time(string $text = '', ?string $datetime = null): HtmlElement
    {
        $time = self::element('time', $text);
        if ($datetime !== null) {
            if (method_exists($time, 'setDatetime')) {
                $time->setDatetime($datetime);
            } else {
                $time->setAttribute('datetime', $datetime);
            }
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
 * @since v1.0.5 2026-04-14
     */
    public static function figure(): HtmlElement
    {
        return self::element('figure', '');
    }

    /**
     * Create a figcaption element
     *
     * @param string $text Caption text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function figcaption(string $text = ''): HtmlElement
    {
        return self::element('figcaption', $text);
    }

    /**
     * Create an image element
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function image(string $src, string $alt = ''): HtmlElement
    {
        $img = self::element('img');
        if (method_exists($img, 'setSrc')) {
            $img->setSrc($src);
        } else {
            $img->setAttribute('src', $src);
        }
        if ($alt !== '') {
            if (method_exists($img, 'setAlt')) {
                $img->setAlt($alt);
            } else {
                $img->setAttribute('alt', $alt);
            }
        }
        return $img;
    }

    /**
     * Create a responsive image element
     *
     * @param string $src Image source
     * @param string $alt Alternative text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
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
 * @since v1.0.5 2026-04-14
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
 * @since v1.0.5 2026-04-14
     */
    public static function picture(): HtmlElement
    {
        return self::element('picture');
    }

    /**
     * Create an audio element
     *
     * @param string $src Audio source
     * @param bool $controls Show audio controls
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function audio(string $src = '', bool $controls = false): HtmlElement
    {
        $audio = self::element('audio');
        if ($src !== '') {
            if (method_exists($audio, 'setSrc')) {
                $audio->setSrc($src);
            } else {
                $audio->setAttribute('src', $src);
            }
        }
        if ($controls) {
            if (method_exists($audio, 'setControls')) {
                $audio->setControls(true);
            } else {
                $audio->setAttribute('controls', 'controls');
            }
        }
        return $audio;
    }

    /**
     * Create a video element
     *
     * @return HtmlElement
 * @param string $src
 * @param bool $controls
 * @param bool $autoplay
 * @since v2.0.1 2026-04-14
     */
    public static function video(string $src = '', bool $controls = false, bool $autoplay = false): HtmlElement
    {
        $video = self::element('video');
        if ($src !== '') {
            if (method_exists($video, 'setSrc')) {
                $video->setSrc($src);
            } else {
                $video->setAttribute('src', $src);
            }
        }
        if ($controls) {
            if (method_exists($video, 'setControls')) {
                $video->setControls(true);
            } else {
                $video->setAttribute('controls', 'controls');
            }
        }
        if ($autoplay) {
            if (method_exists($video, 'setAutoplay')) {
                $video->setAutoplay(true);
            } else {
                $video->setAttribute('autoplay', 'autoplay');
            }
        }
        return $video;
    }

    /**
     * Create a source element (for audio/video)
     *
     * @param string $src Source URL
     * @param string $type MIME type
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function source(string $src, string $type): HtmlElement
    {
        $source = self::element('source');
        if (method_exists($source, 'setSrc')) {
            $source->setSrc($src);
        } else {
            $source->setAttribute('src', $src);
        }
        if (method_exists($source, 'setType')) {
            $source->setType($type);
        } else {
            $source->setAttribute('type', $type);
        }
        return $source;
    }

    /**
     * Create a track element (text tracks for media)
     *
     * @param string $src Source URL for the track
     * @param string $kind Kind of track (subtitles, captions, descriptions, chapters, metadata)
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function track(string $src = '', string $kind = ''): HtmlElement
    {
        $track = self::element('track');
        if ($src !== '') {
            if (method_exists($track, 'setSrc')) {
                $track->setSrc($src);
            } else {
                $track->setAttribute('src', $src);
            }
        }
        if ($kind !== '') {
            if (method_exists($track, 'setKind')) {
                $track->setKind($kind);
            } else {
                $track->setAttribute('kind', $kind);
            }
        }
        return $track;
    }

    // ========================================================================
    // INTERACTIVE SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a details element (expandable information)
     *
     * @param bool $open Initially open
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function details(bool $open = false): HtmlElement
    {
        $details = self::element('details');
        if ($open) {
            if (method_exists($details, 'setOpen')) {
                $details->setOpen(true);
            } else {
                $details->setAttribute('open', 'open');
            }
        }
        return $details;
    }

    /**
     * Create a summary element (details summary/header)
     *
     * @param string $text Summary text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function summary(string $text = ''): HtmlElement
    {
        return self::element('summary', $text);
    }

    /**
     * Create a dialog element
     *
     * @param bool $open Initially open
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function dialog(bool $open = false): HtmlElement
    {
        $dialog = self::element('dialog');
        if ($open) {
            if (method_exists($dialog, 'setOpen')) {
                $dialog->setOpen(true);
            } else {
                $dialog->setAttribute('open', 'open');
            }
        }
        return $dialog;
    }

    /**
     * Create a noscript element
     *
     * @param string $text Optional content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function noscript(string $text = ''): HtmlElement
    {
        return self::element('noscript', $text);
    }

    /**
     * Create a canvas element with optional dimensions
     *
     * @return HtmlElement
 * @param ?int $width
 * @param ?int $height
 * @since v2.0.1 2026-04-14
     */
    public static function canvas(?int $width = null, ?int $height = null): HtmlElement
    {
        $canvas = self::element('canvas');
        if ($width !== null) {
            if (method_exists($canvas, 'setWidth')) {
                $canvas->setWidth($width);
            } else {
                $canvas->setAttribute('width', (string)$width);
            }
        }
        if ($height !== null) {
            if (method_exists($canvas, 'setHeight')) {
                $canvas->setHeight($height);
            } else {
                $canvas->setAttribute('height', (string)$height);
            }
        }
        return $canvas;
    }

    /**
     * Create an svg element with optional viewBox dimensions
     *
     * @return HtmlElement
 * @param ?int $width
 * @param ?int $height
 * @since v2.0.1 2026-04-14
     */
    public static function svg(?int $width = null, ?int $height = null): HtmlElement
    {
        $svg = self::element('svg');
        if ($width !== null && $height !== null) {
            $view = sprintf('0 0 %d %d', $width, $height);
            if (method_exists($svg, 'setViewBox')) {
                $svg->setViewBox($view);
            } else {
                $svg->setAttribute('viewBox', $view);
            }
        }
        return $svg;
    }

    /**
     * Create the root html element with optional lang attribute
     *
     * @return HtmlElement
 * @param ?string $lang
 * @since v2.0.1 2026-04-14
     */
    public static function htmlElement(?string $lang = null): HtmlElement
    {
        $html = self::element('html');
        if ($lang !== null) {
            if (method_exists($html, 'setLang')) {
                $html->setLang($lang);
            } else {
                $html->setAttribute('lang', $lang);
            }
        }
        return $html;
    }

    /**
     * Create a head element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function head(): HtmlElement
    {
        return self::element('head');
    }

    /**
     * Create a body element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function body(): HtmlElement
    {
        return self::element('body');
    }

    /**
     * Create a title element
     *
     * @param string $text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function title(string $text = ''): HtmlElement
    {
        return self::element('title', $text);
    }

    /**
     * Create a meta element
     *
     * @param string $name
     * @param string $content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function meta(string $name, string $content): HtmlElement
    {
        $meta = self::element('meta');
        if (method_exists($meta, 'setName')) {
            $meta->setName($name);
        } else {
            $meta->setAttribute('name', $name);
        }
        if (method_exists($meta, 'setContent')) {
            $meta->setContent($content);
        } else {
            $meta->setAttribute('content', $content);
        }
        return $meta;
    }

    /**
     * Create a link element (e.g., stylesheet)
     *
     * @param string $rel
     * @param string $href
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function link(string $rel, string $href): HtmlElement
    {
        $link = self::element('link');
        if (method_exists($link, 'setRel')) {
            $link->setRel($rel);
        } else {
            $link->setAttribute('rel', $rel);
        }
        if (method_exists($link, 'setHref')) {
            $link->setHref($href);
        } else {
            $link->setAttribute('href', $href);
        }
        return $link;
    }

    /**
     * Create a script element
     *
     * @return HtmlElement
 * @param string $src
 * @param ?string $type
 * @since v2.0.1 2026-04-14
     */
    public static function script(string $src = '', ?string $type = null): HtmlElement
    {
        $script = self::element('script');
        if ($src !== '') {
            if (method_exists($script, 'setSrc')) {
                $script->setSrc($src);
            } else {
                $script->setAttribute('src', $src);
            }
        }
        if ($type !== null) {
            if (method_exists($script, 'setType')) {
                $script->setType($type);
            } else {
                $script->setAttribute('type', $type);
            }
        }
        return $script;
    }

    /**
     * Create a style element with CSS content
     *
     * @param string $css
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function style(string $css = ''): HtmlElement
    {
        return self::element('style', $css);
    }

    // ========================================================================
    // PROGRESS & METER SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a progress element
     *
     * @return HtmlElement
 * @param ?int $value
 * @param ?int $max
 * @since v2.0.1 2026-04-14
     */
    public static function progress(?int $value = null, ?int $max = null): HtmlElement
    {
        $progress = self::element('progress');
        if ($value !== null) {
            if (method_exists($progress, 'setValue')) {
                $progress->setValue($value);
            } else {
                $progress->setAttribute('value', (string)$value);
            }
        }
        if ($max !== null) {
            if (method_exists($progress, 'setMax')) {
                $progress->setMax($max);
            } else {
                $progress->setAttribute('max', (string)$max);
            }
        }
        return $progress;
    }

    /**
     * Create a meter element
     *
     * @return HtmlElement
 * @param ?int $value
 * @param ?int $min
 * @param ?int $max
 * @param ?int $low
 * @param ?int $high
 * @since v2.0.1 2026-04-14
     */
    public static function meter(?int $value = null, ?int $min = null, ?int $max = null, ?int $low = null, ?int $high = null): HtmlElement
    {
        $meter = self::element('meter');
        if ($value !== null) {
            if (method_exists($meter, 'setValue')) {
                $meter->setValue($value);
            } else {
                $meter->setAttribute('value', (string)$value);
            }
        }
        if ($min !== null) {
            if (method_exists($meter, 'setMin')) {
                $meter->setMin($min);
            } else {
                $meter->setAttribute('min', (string)$min);
            }
        }
        if ($max !== null) {
            if (method_exists($meter, 'setMax')) {
                $meter->setMax($max);
            } else {
                $meter->setAttribute('max', (string)$max);
            }
        }
        if ($low !== null) {
            if (method_exists($meter, 'setLow')) {
                $meter->setLow($low);
            } else {
                $meter->setAttribute('low', (string)$low);
            }
        }
        if ($high !== null) {
            if (method_exists($meter, 'setHigh')) {
                $meter->setHigh($high);
            } else {
                $meter->setAttribute('high', (string)$high);
            }
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
 * @since v1.0.5 2026-04-14
     */
    public static function unorderedList(): HtmlElement
    {
        return self::element('ul');
    }

    /**
     * Create an ordered list element
     *
     * @return HtmlElement
 * @param ?int $start
 * @since v2.0.1 2026-04-14
     */
    public static function orderedList(?int $start = null): HtmlElement
    {
        $ol = self::element('ol');
        if ($start !== null) {
            if (method_exists($ol, 'setStart')) {
                $ol->setStart($start);
            } else {
                $ol->setAttribute('start', (string)$start);
            }
        }
        return $ol;
    }

    /**
     * Create a list item element
     *
     * @param string $text Item text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function listItem(string $text = ''): HtmlElement
    {
        return self::element('li', $text);
    }

    /**
     * Create a definition list element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function definitionList(): HtmlElement
    {
        return self::element('dl');
    }

    /**
     * Create a definition term element
     *
     * @param string $text Term text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function definitionTerm(string $text = ''): HtmlElement
    {
        return self::element('dt', $text);
    }

    /**
     * Create a definition description element
     *
     * @param string $text Description text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function definitionDescription(string $text = ''): HtmlElement
    {
        return self::element('dd', $text);
    }

    /**
     * Backwards-compatible aliases using "description" naming used by tests
 * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function descriptionList(): HtmlElement
    {
        return self::definitionList();
    }

/**
 * descriptionTerm
 *
 * @since v1.0.5 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
    public static function descriptionTerm(string $text = ''): HtmlElement
    {
        return self::definitionTerm($text);
    }

/**
 * descriptionDefinition
 *
 * @since v1.0.5 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
    public static function descriptionDefinition(string $text = ''): HtmlElement
    {
        return self::definitionDescription($text);
    }

    // ========================================================================
    // TABLE SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a table element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function table(): HtmlElement
    {
        return self::element('table');
    }

    /**
     * Create a table head element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableHead(): HtmlElement
    {
        return self::element('thead');
    }

    /**
     * Create a table body element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableBody(): HtmlElement
    {
        return self::element('tbody');
    }

    /**
     * Create a table foot element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableFoot(): HtmlElement
    {
        return self::element('tfoot');
    }

    /**
     * Create a table row element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableRow(): HtmlElement
    {
        return self::element('tr');
    }

    /**
     * Create a table data cell element
     *
     * @param string $text Cell content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableData(string $text = ''): HtmlElement
    {
        return self::element('td', $text);
    }

    /**
     * Create a table header cell element
     *
     * @param string $text Header content
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableHeader(string $text = ''): HtmlElement
    {
        return self::element('th', $text);
    }

    /**
     * Create a table caption element
     *
     * @param string $text Caption text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableCaption(string $text = ''): HtmlElement
    {
        return self::element('caption', $text);
    }

    /**
     * Create a table column element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableColumn(): HtmlElement
    {
        return self::element('col');
    }

    /**
     * Create a table column group element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function tableColumnGroup(): HtmlElement
    {
        return self::element('colgroup');
    }

    // ========================================================================
    // FORM SEMANTIC ELEMENTS
    // ========================================================================

    /**
     * Create a fieldset element
     *
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function fieldset(): HtmlElement
    {
        return self::element('fieldset');
    }

    /**
     * Create a legend element
     *
     * @param string $text Legend text
     * @return HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public static function legend(string $text = ''): HtmlElement
    {
        return self::element('legend', $text);
    }
}
