<?php

namespace Ksfraser\HTML\Formatting;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlSup - HTML <sup> superscript element
 *
 * @package Ksfraser\HTML\Formatting
 */
class HtmlSup extends HtmlFormatting
{
    /**
     * @param HtmlElementInterface $data Element to render inside the <sup> tag.
     */
    public function __construct(HtmlElementInterface $data)
    {
        parent::__construct($data);
        $this->tag = "sup";
    }
}
