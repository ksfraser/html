<?php
namespace Ksfraser\HTML\Typescript;

use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlTypeScriptString
 *
 * Semantic wrapper for TypeScript code as an HTML element.
 * Extends HtmlScriptLanguage for clarity: use this when representing inline TypeScript content.
 */
class HtmlTypeScriptString extends HtmlScriptLanguage {
    protected $string;
    public function __construct($string) {
        $this->string = $string;
    }
    public function getHtml(): string {
        return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
    }
}
