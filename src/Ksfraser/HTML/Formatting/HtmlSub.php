<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlSub - HTML <sub> subscript element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlSub extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <sub> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "sub";
    }
}
