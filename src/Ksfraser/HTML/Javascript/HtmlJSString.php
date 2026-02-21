<?php

namespace Ksfraser\HTML\Javascript;

use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlJSString
 *
 * Semantic wrapper for JavaScript code as an HTML element.
 * Extends HtmlScriptLanguage for clarity: use this when representing inline JS content.
 */
class HtmlJSString extends HtmlScriptLanguage
{
    protected $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function getHtml(): string
    {
        return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
    }
}
