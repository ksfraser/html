<?php
namespace Ksfraser\HTML\VBScript;

use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * HtmlVBScriptString
 *
 * Semantic wrapper for VBScript code as an HTML element.
 * Uses HtmlScriptLanguage so script content is emitted unescaped inside <script> tags.
 *
 * @since 1.0.5 2026-02-22
 */
class HtmlVBScriptString extends HtmlScriptLanguage {
    // Inherits getHtml() from HtmlScriptLanguage (unescaped output)
}
