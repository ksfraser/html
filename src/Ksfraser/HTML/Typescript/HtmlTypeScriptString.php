<?php
namespace Ksfraser\HTML\Typescript;

use Ksfraser\HTML\Elements\HtmlString;

/**
 * HtmlTypeScriptString
 *
 * Semantic wrapper for TypeScript code as an HTML element.
 * Extends HtmlString for clarity: use this when representing inline TypeScript content.
 */
class HtmlTypeScriptString extends HtmlString {
    public function getHtml(): string
    {
        return (string)$this->string;
    }
}
