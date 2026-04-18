<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlRaw - Raw HTML content without escaping

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This class is for passing pre-sanitized HTML content that should

 * 

 * 

 * 

 * NOT be HTML-escaped. Use with caution - only for trusted HTML!

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Unlike HtmlString (which HTML-escapes for safety), HtmlRaw passes

 * 

 * 

 * 

 * through the HTML as-is. This is useful for:

 * 

 * 

 * 

 * - Pre-generated HTML from other components

 * 

 * 

 * 

 * - HTML markup that needs to be preserved (e.g., <b>, <a>, etc.)

 * 

 * 

 * 

 * - Content from trusted sources

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Security Warning:

 * 

 * 

 * 

 * Never use HtmlRaw with user input! Always sanitize first or use HtmlString.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * ```php

 * 

 * 

 * 

 * // Safe - content from other HTML components

 * 

 * 

 * 

 * $content = new HtmlRaw('<b>Important</b> text');

 * 

 * 

 * 

 * $row = new HtmlLabelRow(new HtmlString('Label:'), $content);

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // UNSAFE - never do this with user input!

 * 

 * 

 * 

 * $userInput = $_POST['comment']; // ❌ DANGEROUS

 * 

 * 

 * 

 * $content = new HtmlRaw($userInput); // ❌ XSS vulnerability!

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Safe - user input escaped

 * 

 * 

 * 

 * $content = new HtmlString($_POST['comment']); // ✅ Escaped

 * 

 * 

 * 

 * ```

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML

 * @version 1.0.0

 * @example 

 * @return void

 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlRaw
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlRaw implements HtmlElementInterface
{
    /**
     *
     * @var string The raw HTML content
     * @return void
     */
    protected string $html;

    /**

     * Constructor

     *

     * @since v1.0.0 2026-04-11

     * @param string $html Raw HTML content (will NOT be escaped)

     * @return void

     */
    public /**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @param string $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $html
 * @return void
 */
function __construct(string $html)
    {
        $this->html = $html;
    }

    /**

     * Render the HTML to output

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public /**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void
    {
        echo $this->getHtml();
    }

    /**

     * Get HTML representation as string

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Returns the raw HTML without any escaping.

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *

     * @since v1.0.0 2026-04-13

     * @return string Raw HTML (unescaped)

     */
    public /**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
    {
        return $this->html;
    }
}
