<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;



















/**
 * SemanticElementsTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * SemanticElementsTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
trait SemanticElementsTrait
{
    /**
     * Resolve an element class for a semantic tag and instantiate it if present.
     *
     * 
     * 
     * Tries candidate class names under Ksfraser\\HTML\\Elements\\, then falls back to `new static()`.
     * 
     * 
     * 
     *
     * @since v2.0.1 2026-04-14
     * @param string $tag
     * @param mixed $args
     * @return HtmlElement
     */
    protected static 



























/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @param string $tag
 * @return HtmlElement
 */
/**
 * element
 *
 * @since v1.0.0 2026-04-14
 * @param string $tag
 * @return HtmlElement
 */
function element(string $tag, ...$args): HtmlElement
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

     * @since 1.0.5 2026-03-30

     * @return HtmlElement

     */
    public static 



























/**
 * header
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * header
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function header(): HtmlElement
    {
        return self::element('header');
    }

    /**

     * Create a nav element (navigation section)

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * nav
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * nav
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function nav(): HtmlElement
    {
        return self::element('nav');
    }

    /**

     * Create a main element (main content area)

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * main
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * main
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function main(): HtmlElement
    {
        return self::element('main', '');
    }

    /**

     * Create a section element

     *

     * @since v2.0.1 2026-04-14

     * @param ?string $id

     * @return HtmlElement

     */
    public static 



























/**
 * section
 *
 * @since v1.0.0 2026-04-14
 * @param string|null $id
 * @return HtmlElement
 */
/**
 * section
 *
 * @since v1.0.0 2026-04-14
 * @param string|null $id
 * @return HtmlElement
 */
function section(?string $id = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * article
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * article
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function article(): HtmlElement
    {
        return self::element('article');
    }

    /**

     * Create a generic div element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * div
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * div
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function div(): HtmlElement
    {
        return self::element('div');
    }

    /**

     * Create an aside element (sidebar/supplementary content)

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * aside
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * aside
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function aside(): HtmlElement
    {
        return self::element('aside');
    }

    /**

     * Create a footer element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * footer
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * footer
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function footer(): HtmlElement
    {
        return self::element('footer');
    }

    // ========================================================================
    // TEXT & CONTENT SEMANTIC ELEMENTS
    // ========================================================================

    /**

     * Create a heading element (h1-h6)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Heading text

     * @param int $level Heading level (1-6, default 1)

     * @return HtmlElement

     */
    public static 



























/**
 * heading
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param int $level
 * @return HtmlElement
 */
/**
 * heading
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param int $level
 * @return HtmlElement
 */
function heading(string $text = '', int $level = 1): HtmlElement
    {
        $level = min(max($level, 1), 6);
        return self::element('h' . $level, $text);
    }

    /**

     * Create a paragraph element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Paragraph text

     * @return HtmlElement

     */
    public static 



























/**
 * paragraph
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * paragraph
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function paragraph(string $text = ''): HtmlElement
    {
        return self::element('p', $text);
    }

    /**

     * Create a strong element (strong importance)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * strong
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * strong
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function strong(string $text = ''): HtmlElement
    {
        return self::element('strong', $text);
    }

    /**

     * Create an em element (emphasis)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * em
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * em
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function em(string $text = ''): HtmlElement
    {
        return self::element('em', $text);
    }

    /**

     * Create a mark element (highlighted/marked text)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * mark
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * mark
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function mark(string $text = ''): HtmlElement
    {
        return self::element('mark', $text);
    }

    /**

     * Create a del element (deleted text)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * del
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * del
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function del(string $text = ''): HtmlElement
    {
        return self::element('del', $text);
    }

    /**

     * Create an ins element (inserted text)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * ins
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * ins
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function ins(string $text = ''): HtmlElement
    {
        return self::element('ins', $text);
    }

    /**

     * Create a sub element (subscript)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * sub
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * sub
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function sub(string $text = ''): HtmlElement
    {
        return self::element('sub', $text);
    }

    /**

     * Create a sup element (superscript)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Text content

     * @return HtmlElement

     */
    public static 



























/**
 * sup
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * sup
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function sup(string $text = ''): HtmlElement
    {
        return self::element('sup', $text);
    }

    /**

     * Create an abbr element (abbreviation)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Abbreviation text

     * @param string $title Title attribute (expanded form)

     * @return HtmlElement

     */
    public static 



























/**
 * abbr
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string $title
 * @return HtmlElement
 */
/**
 * abbr
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string $title
 * @return HtmlElement
 */
function abbr(string $text = '', string $title = ''): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $text

     * @return HtmlElement

     */
    public static 



























/**
 * kbd
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * kbd
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function kbd(string $text = ''): HtmlElement
    {
        return self::element('kbd', $text);
    }

    /**

     * Create a code element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Code content

     * @return HtmlElement

     */
    public static 



























/**
 * code
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * code
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function code(string $text = ''): HtmlElement
    {
        return self::element('code', $text);
    }

    /**

     * Create a samp element (sample output)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Sample text

     * @return HtmlElement

     */
    public static 



























/**
 * samp
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * samp
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function samp(string $text = ''): HtmlElement
    {
        return self::element('samp', $text);
    }

    /**

     * Create a var element (variable name)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Variable name

     * @return HtmlElement

     */
    public static 



























/**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function var(string $text = ''): HtmlElement
    {
        return self::element('var', $text);
    }
    /**
     * Create a pre element (preformatted text)
     *
     * @since v1.0.5 2026-04-14
     * @param string $text Preformatted content (optional)
     * @return HtmlElement
     */
    public static 



























/**
 * pre
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * pre
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function pre(string $text = ''): HtmlElement
    {
        return self::element('pre', $text);
    }

    /**

     * Create a small element (side comments, fine print)

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Small text

     * @return HtmlElement

     */
    public static 



























/**
 * small
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * small
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function small(string $text = ''): HtmlElement
    {
        return self::element('small', $text);
    }

    /**

     * Create a blockquote element

     *

     * @since v2.0.1 2026-04-14

     * @param string $text

     * @param ?string $cite

     * @return HtmlElement

     */
    public static 



























/**
 * blockquote
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string|null $cite
 * @return HtmlElement
 */
/**
 * blockquote
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string|null $cite
 * @return HtmlElement
 */
function blockquote(string $text = '', ?string $cite = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $text Citation text

     * @return HtmlElement

     */
    public static 



























/**
 * cite
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * cite
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function cite(string $text = ''): HtmlElement
    {
        return self::element('cite', $text);
    }

    /**

     * Create an address element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Address content

     * @return HtmlElement

     */
    public static 



























/**
 * address
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * address
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function address(string $text = ''): HtmlElement
    {
        return self::element('address', $text);
    }

    /**

     * Create a time element

     *

     * @since v2.0.1 2026-04-14

     * @param string $text

     * @param ?string $datetime

     * @return HtmlElement

     */
    public static 



























/**
 * time
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string|null $datetime
 * @return HtmlElement
 */
/**
 * time
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @param string|null $datetime
 * @return HtmlElement
 */
function time(string $text = '', ?string $datetime = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * figure
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * figure
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function figure(): HtmlElement
    {
        return self::element('figure', '');
    }

    /**

     * Create a figcaption element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Caption text

     * @return HtmlElement

     */
    public static 



























/**
 * figcaption
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * figcaption
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function figcaption(string $text = ''): HtmlElement
    {
        return self::element('figcaption', $text);
    }

    /**

     * Create an image element

     *

     * @since v1.0.5 2026-04-14

     * @param string $src Image source

     * @param string $alt Alternative text

     * @return HtmlElement

     */
    public static 



























/**
 * image
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
/**
 * image
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
function image(string $src, string $alt = ''): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $src Image source

     * @param string $alt Alternative text

     * @return HtmlElement

     */
    public static 



























/**
 * imageResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
/**
 * imageResponsive
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
function imageResponsive(string $src, string $alt = ''): HtmlElement
    {
        $img = self::image($src, $alt);
        $img->addCSSClass('img-fluid');
        return $img;
    }

    /**

     * Create a thumbnail image element

     *

     * @since v1.0.5 2026-04-14

     * @param string $src Image source

     * @param string $alt Alternative text

     * @return HtmlElement

     */
    public static 



























/**
 * imageThumbnail
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
/**
 * imageThumbnail
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $alt
 * @return HtmlElement
 */
function imageThumbnail(string $src, string $alt = ''): HtmlElement
    {
        $img = self::image($src, $alt);
        $img->addCSSClass('img-thumbnail');
        return $img;
    }

    /**

     * Create a picture element (for responsive images)

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * picture
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * picture
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function picture(): HtmlElement
    {
        return self::element('picture');
    }

    /**

     * Create an audio element

     *

     * @since v1.0.5 2026-04-14

     * @param string $src Audio source

     * @param bool $controls Show audio controls

     * @return HtmlElement

     */
    public static 



























/**
 * audio
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param bool $controls
 * @return HtmlElement
 */
/**
 * audio
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param bool $controls
 * @return HtmlElement
 */
function audio(string $src = '', bool $controls = false): HtmlElement
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

     * @since v2.0.1 2026-04-14

     * @param string $src

     * @param bool $controls

     * @param bool $autoplay

     * @return HtmlElement

     */
    public static 



























/**
 * video
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param bool $controls
 * @param bool $autoplay
 * @return HtmlElement
 */
/**
 * video
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param bool $controls
 * @param bool $autoplay
 * @return HtmlElement
 */
function video(string $src = '', bool $controls = false, bool $autoplay = false): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $src Source URL

     * @param string $type MIME type

     * @return HtmlElement

     */
    public static 



























/**
 * source
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $type
 * @return HtmlElement
 */
/**
 * source
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $type
 * @return HtmlElement
 */
function source(string $src, string $type): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $src Source URL for the track

     * @param string $kind Kind of track (subtitles, captions, descriptions, chapters, metadata)

     * @return HtmlElement

     */
    public static 



























/**
 * track
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $kind
 * @return HtmlElement
 */
/**
 * track
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string $kind
 * @return HtmlElement
 */
function track(string $src = '', string $kind = ''): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param bool $open Initially open

     * @return HtmlElement

     */
    public static 



























/**
 * details
 *
 * @since v1.0.0 2026-04-14
 * @param bool $open
 * @return HtmlElement
 */
/**
 * details
 *
 * @since v1.0.0 2026-04-14
 * @param bool $open
 * @return HtmlElement
 */
function details(bool $open = false): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $text Summary text

     * @return HtmlElement

     */
    public static 



























/**
 * summary
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * summary
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function summary(string $text = ''): HtmlElement
    {
        return self::element('summary', $text);
    }

    /**

     * Create a dialog element

     *

     * @since v1.0.5 2026-04-14

     * @param bool $open Initially open

     * @return HtmlElement

     */
    public static 



























/**
 * dialog
 *
 * @since v1.0.0 2026-04-14
 * @param bool $open
 * @return HtmlElement
 */
/**
 * dialog
 *
 * @since v1.0.0 2026-04-14
 * @param bool $open
 * @return HtmlElement
 */
function dialog(bool $open = false): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $text Optional content

     * @return HtmlElement

     */
    public static 



























/**
 * noscript
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * noscript
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function noscript(string $text = ''): HtmlElement
    {
        return self::element('noscript', $text);
    }

    /**

     * Create a canvas element with optional dimensions

     *

     * @since v2.0.1 2026-04-14

     * @param ?int $width

     * @param ?int $height

     * @return HtmlElement

     */
    public static 



























/**
 * canvas
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $width
 * @param int|null $height
 * @return HtmlElement
 */
/**
 * canvas
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $width
 * @param int|null $height
 * @return HtmlElement
 */
function canvas(?int $width = null, ?int $height = null): HtmlElement
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

     * @since v2.0.1 2026-04-14

     * @param ?int $width

     * @param ?int $height

     * @return HtmlElement

     */
    public static 



























/**
 * svg
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $width
 * @param int|null $height
 * @return HtmlElement
 */
/**
 * svg
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $width
 * @param int|null $height
 * @return HtmlElement
 */
function svg(?int $width = null, ?int $height = null): HtmlElement
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

     * @since v2.0.1 2026-04-14

     * @param ?string $lang

     * @return HtmlElement

     */
    public static 



























/**
 * htmlElement
 *
 * @since v1.0.0 2026-04-14
 * @param string|null $lang
 * @return HtmlElement
 */
/**
 * htmlElement
 *
 * @since v1.0.0 2026-04-14
 * @param string|null $lang
 * @return HtmlElement
 */
function htmlElement(?string $lang = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * head
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * head
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function head(): HtmlElement
    {
        return self::element('head');
    }

    /**

     * Create a body element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * body
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * body
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function body(): HtmlElement
    {
        return self::element('body');
    }

    /**

     * Create a title element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text

     * @return HtmlElement

     */
    public static 



























/**
 * title
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * title
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function title(string $text = ''): HtmlElement
    {
        return self::element('title', $text);
    }

    /**

     * Create a meta element

     *

     * @since v1.0.5 2026-04-14

     * @param string $name

     * @param string $content

     * @return HtmlElement

     */
    public static 



























/**
 * meta
 *
 * @since v1.0.0 2026-04-14
 * @param string $name
 * @param string $content
 * @return HtmlElement
 */
/**
 * meta
 *
 * @since v1.0.0 2026-04-14
 * @param string $name
 * @param string $content
 * @return HtmlElement
 */
function meta(string $name, string $content): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $rel

     * @param string $href

     * @return HtmlElement

     */
    public static 



























/**
 * link
 *
 * @since v1.0.0 2026-04-14
 * @param string $rel
 * @param string $href
 * @return HtmlElement
 */
/**
 * link
 *
 * @since v1.0.0 2026-04-14
 * @param string $rel
 * @param string $href
 * @return HtmlElement
 */
function link(string $rel, string $href): HtmlElement
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

     * @since v2.0.1 2026-04-14

     * @param string $src

     * @param ?string $type

     * @return HtmlElement

     */
    public static 



























/**
 * script
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string|null $type
 * @return HtmlElement
 */
/**
 * script
 *
 * @since v1.0.0 2026-04-14
 * @param string $src
 * @param string|null $type
 * @return HtmlElement
 */
function script(string $src = '', ?string $type = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $css

     * @return HtmlElement

     */
    public static 



























/**
 * style
 *
 * @since v1.0.0 2026-04-14
 * @param string $css
 * @return HtmlElement
 */
/**
 * style
 *
 * @since v1.0.0 2026-04-14
 * @param string $css
 * @return HtmlElement
 */
function style(string $css = ''): HtmlElement
    {
        return self::element('style', $css);
    }

    // ========================================================================
    // PROGRESS & METER SEMANTIC ELEMENTS
    // ========================================================================

    /**

     * Create a progress element

     *

     * @since v2.0.1 2026-04-14

     * @param ?int $value

     * @param ?int $max

     * @return HtmlElement

     */
    public static 



























/**
 * progress
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $value
 * @param int|null $max
 * @return HtmlElement
 */
/**
 * progress
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $value
 * @param int|null $max
 * @return HtmlElement
 */
function progress(?int $value = null, ?int $max = null): HtmlElement
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

     * @since v2.0.1 2026-04-14

     * @param ?int $value

     * @param ?int $min

     * @param ?int $max

     * @param ?int $low

     * @param ?int $high

     * @return HtmlElement

     */
    public static 



























/**
 * meter
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $value
 * @param int|null $min
 * @param int|null $max
 * @param int|null $low
 * @param int|null $high
 * @return HtmlElement
 */
/**
 * meter
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $value
 * @param int|null $min
 * @param int|null $max
 * @param int|null $low
 * @param int|null $high
 * @return HtmlElement
 */
function meter(?int $value = null, ?int $min = null, ?int $max = null, ?int $low = null, ?int $high = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * unorderedList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * unorderedList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function unorderedList(): HtmlElement
    {
        return self::element('ul');
    }

    /**

     * Create an ordered list element

     *

     * @since v2.0.1 2026-04-14

     * @param ?int $start

     * @return HtmlElement

     */
    public static 



























/**
 * orderedList
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $start
 * @return HtmlElement
 */
/**
 * orderedList
 *
 * @since v1.0.0 2026-04-14
 * @param int|null $start
 * @return HtmlElement
 */
function orderedList(?int $start = null): HtmlElement
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

     * @since v1.0.5 2026-04-14

     * @param string $text Item text

     * @return HtmlElement

     */
    public static 



























/**
 * listItem
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * listItem
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function listItem(string $text = ''): HtmlElement
    {
        return self::element('li', $text);
    }

    /**

     * Create a definition list element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * definitionList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * definitionList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function definitionList(): HtmlElement
    {
        return self::element('dl');
    }

    /**

     * Create a definition term element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Term text

     * @return HtmlElement

     */
    public static 



























/**
 * definitionTerm
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * definitionTerm
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function definitionTerm(string $text = ''): HtmlElement
    {
        return self::element('dt', $text);
    }

    /**

     * Create a definition description element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Description text

     * @return HtmlElement

     */
    public static 



























/**
 * definitionDescription
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * definitionDescription
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function definitionDescription(string $text = ''): HtmlElement
    {
        return self::element('dd', $text);
    }

    /**

     * Backwards-compatible aliases using "description" naming used by tests

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * descriptionList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * descriptionList
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function descriptionList(): HtmlElement
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
    public static 



























/**
 * descriptionTerm
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * descriptionTerm
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function descriptionTerm(string $text = ''): HtmlElement
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
    public static 



























/**
 * descriptionDefinition
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * descriptionDefinition
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function descriptionDefinition(string $text = ''): HtmlElement
    {
        return self::definitionDescription($text);
    }

    // ========================================================================
    // TABLE SEMANTIC ELEMENTS
    // ========================================================================

    /**

     * Create a table element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * table
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * table
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function table(): HtmlElement
    {
        return self::element('table');
    }

    /**

     * Create a table head element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableHead
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableHead
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableHead(): HtmlElement
    {
        return self::element('thead');
    }

    /**

     * Create a table body element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableBody
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableBody
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableBody(): HtmlElement
    {
        return self::element('tbody');
    }

    /**

     * Create a table foot element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableFoot
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableFoot
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableFoot(): HtmlElement
    {
        return self::element('tfoot');
    }

    /**

     * Create a table row element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableRow
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableRow
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableRow(): HtmlElement
    {
        return self::element('tr');
    }

    /**

     * Create a table data cell element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Cell content

     * @return HtmlElement

     */
    public static 



























/**
 * tableData
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * tableData
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function tableData(string $text = ''): HtmlElement
    {
        return self::element('td', $text);
    }

    /**

     * Create a table header cell element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Header content

     * @return HtmlElement

     */
    public static 



























/**
 * tableHeader
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * tableHeader
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function tableHeader(string $text = ''): HtmlElement
    {
        return self::element('th', $text);
    }

    /**

     * Create a table caption element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Caption text

     * @return HtmlElement

     */
    public static 



























/**
 * tableCaption
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * tableCaption
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function tableCaption(string $text = ''): HtmlElement
    {
        return self::element('caption', $text);
    }

    /**

     * Create a table column element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableColumn
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableColumn
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableColumn(): HtmlElement
    {
        return self::element('col');
    }

    /**

     * Create a table column group element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * tableColumnGroup
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * tableColumnGroup
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function tableColumnGroup(): HtmlElement
    {
        return self::element('colgroup');
    }

    // ========================================================================
    // FORM SEMANTIC ELEMENTS
    // ========================================================================

    /**

     * Create a fieldset element

     *

     * @since v1.0.5 2026-04-14

     * @return HtmlElement

     */
    public static 



























/**
 * fieldset
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
/**
 * fieldset
 *
 * @since v1.0.0 2026-04-14
 * @return HtmlElement
 */
function fieldset(): HtmlElement
    {
        return self::element('fieldset');
    }

    /**

     * Create a legend element

     *

     * @since v1.0.5 2026-04-14

     * @param string $text Legend text

     * @return HtmlElement

     */
    public static 



























/**
 * legend
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
/**
 * legend
 *
 * @since v1.0.0 2026-04-14
 * @param string $text
 * @return HtmlElement
 */
function legend(string $text = ''): HtmlElement
    {
        return self::element('legend', $text);
    }
}
