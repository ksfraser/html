<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlDeleted - HTML <del> deleted/struck-through text element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlDeleted extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <del> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "del";
    }
}
