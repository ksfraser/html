<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlStrong - HTML <strong> strong importance element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlStrong extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <strong> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "strong";
    }
}
