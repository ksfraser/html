<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlItalic - HTML <i> italic text element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlItalic extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <i> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "i";
    }
}
