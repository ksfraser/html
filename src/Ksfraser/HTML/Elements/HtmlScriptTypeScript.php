<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Elements\HtmlScript;
use Ksfraser\HTML\Typescript\HtmlTypeScriptString;

/**

 * HtmlScriptTypeScript - Represents a <script> tag for TypeScript content

 *

 * 

 * Generates: <script type="application/typescript">...</script>

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlScriptTypeScript extends HtmlScript
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlTypeScriptString $content
 * @return void
 */
    public function __construct(HtmlTypeScriptString $content)
    {
        parent::__construct('application/typescript', $content);
    }
}
