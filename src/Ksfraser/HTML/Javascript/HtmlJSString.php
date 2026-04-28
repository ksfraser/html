<?php

namespace Ksfraser\HTML\Javascript;

use Ksfraser\HTML\Elements\HtmlString;

/**
 * HtmlJSString
 *
 * Semantic wrapper for JavaScript code as an HTML element.
 * Extends HtmlString for clarity: use this when representing inline JS content.
 */
class HtmlJSString extends HtmlString
{
    public function getHtml(): string
    {
        return (string)$this->string;
    }
}
