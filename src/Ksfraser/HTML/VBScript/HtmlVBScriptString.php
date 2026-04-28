<?php
namespace Ksfraser\HTML\VBScript;

use Ksfraser\HTML\Elements\HtmlString;

/**
 * HtmlVBScriptString
 *
 * Semantic wrapper for VBScript code as an HTML element.
 * Extends HtmlString for clarity: use this when representing inline VBScript content.
 */
class HtmlVBScriptString extends HtmlString {
    public function getHtml(): string
    {
        return (string)$this->string;
    }
}
