<?php
namespace Ksfraser\HTML\Json;

use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlJsonString
 *
 * Semantic wrapper for JSON code as an HTML element.
 * Extends HtmlScriptLanguage for clarity: use this when representing inline JSON content.
 */
class HtmlJsonString extends HtmlScriptLanguage {
    protected $string;
    public function __construct($string) {
        $this->string = $string;
    }
    public function getHtml(): string {
        return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
    }
}
