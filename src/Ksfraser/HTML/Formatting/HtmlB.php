<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlB - HTML <b> bold element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlB extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <b> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "b";
    }
}
