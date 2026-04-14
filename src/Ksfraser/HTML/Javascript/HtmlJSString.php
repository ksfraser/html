<?php

namespace Ksfraser\HTML\Javascript;

use Ksfraser\HTML\HtmlScriptLanguage;

/**

 * HtmlJSString

 *

 * 

 * Semantic wrapper for JavaScript code as an HTML element.

 * Uses HtmlScriptLanguage so script content is emitted unescaped inside <script> tags.

 * 

 *

 * @since 1.0.5 2026-02-22

 */
class HtmlJSString extends HtmlScriptLanguage
{
    // Inherits getHtml() from HtmlScriptLanguage (unescaped output)
}
