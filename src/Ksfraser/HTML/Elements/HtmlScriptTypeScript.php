<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlScriptLanguage;
use Ksfraser\HTML\Typescript\HtmlTypeScriptString;

/**
 * HtmlScriptTypeScript - Represents a <script> tag for TypeScript content
 *
 * Generates: <script type="application/typescript">...</script>
 */
class HtmlScriptTypeScript extends HtmlScriptLanguage
{
    public function __construct(HtmlTypeScriptString $content)
    {
        parent::__construct($content);
        $this->tag = 'script';
        $this->setAttribute('type', 'application/typescript');
    }
}
