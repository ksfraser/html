<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Javascript\HtmlJSString;

/**
 * HtmlScriptJS - Strict JavaScript <script> tag
 * Accepts only HtmlJSString content, sets type="text/javascript".
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlScriptJS extends HtmlScript
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlJSString $content
 * @return void
 */
    public function __construct(HtmlJSString $content)
    {
        parent::__construct('text/javascript', $content);
    }
}
