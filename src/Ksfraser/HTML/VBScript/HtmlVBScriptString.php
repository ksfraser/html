<?php
namespace Ksfraser\HTML\VBScript;

use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlVBScriptString
 *
 * Semantic wrapper for VBScript code as an HTML element.
 * Extends HtmlScriptLanguage for clarity: use this when representing inline VBScript content.
 */
class HtmlVBScriptString extends HtmlScriptLanguage {
    protected $string;
    public function __construct($string) {
        $this->string = $string;
    }
    public function getHtml(): string {
        return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
    }
}
