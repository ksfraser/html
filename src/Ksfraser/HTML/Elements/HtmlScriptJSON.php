<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Json\HtmlJsonString;

/**

 * HtmlScriptJSON - Strict JSON <script> tag

 *

 * Accepts only HtmlJsonString content, sets type="application/json".

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlScriptJSON extends HtmlScript
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlJsonString $content
 * @return void
 */
    public function __construct(HtmlJsonString $content)
    {
        parent::__construct('application/json', $content);
    }
}
