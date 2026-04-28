<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlFormatting - Base class for inline semantic formatting elements
 *
 * Provides the shared constructor signature used by formatting elements such as
 * {@see HtmlB}, {@see HtmlEm}, {@see HtmlStrong}, {@see HtmlItalic}, etc.
 * Subclasses set $this->tag to the appropriate HTML element name.
 *
 * All content must be supplied as an HtmlElementInterface. Use HtmlString to
 * wrap plain text before passing it here.
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlFormatting extends HtmlElement
{
    /**
     * @param HtmlElementInterface $content Element to render inside the tag.
     */
    public function __construct(HtmlElementInterface $content)
    {
        parent::__construct($content);
        $this->setTag('span');
    }
}
