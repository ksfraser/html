<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlInserted - HTML <ins> inserted text element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlInserted extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <ins> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "ins";
    }
}
