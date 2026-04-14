<?php
namespace Ksfraser\HTML\Json;

use Ksfraser\HTML\Elements\HtmlRaw;

/**
 * HtmlJsonString
 *
 * Semantic wrapper for JSON code as an HTML element.
 * Uses HtmlRaw so the JSON content is not HTML-escaped when rendered inside a script tag.
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlJsonString extends HtmlRaw {
    // Inherits getHtml() from HtmlRaw (unescaped output)
}
