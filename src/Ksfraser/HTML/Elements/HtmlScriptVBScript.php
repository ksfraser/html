<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\VBScript\HtmlVBScriptString;

/**

 * HtmlScriptVBScript - Strict VBScript <script> tag

 *

 * Accepts only HtmlVBScriptString content, sets type="text/vbscript".

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlScriptVBScript extends HtmlScript
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlVBScriptString $content
 * @return void
 */
    public function __construct(HtmlVBScriptString $content)
    {
        parent::__construct('text/vbscript', $content);
    }
}
