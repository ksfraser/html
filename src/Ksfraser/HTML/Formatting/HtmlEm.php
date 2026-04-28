<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlEm - HTML <em> emphasized text element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlEm extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <em> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "em";
    }
}
