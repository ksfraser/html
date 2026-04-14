<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlScriptLanguage;

/**

 * Abstract HtmlScript - Template for script tag subclasses

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Provides common logic for script tags. Subclasses should specify script type and content.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML

 * @return void

 */
/**
 * HtmlScript
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlScript extends HtmlElement
{
    /**
     * Constructor for script elements
     *
     * @since v1.0.0 2026-04-11
     * @param ?string $type
     * @param mixed $content
     * @return void
     */
public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $type
 * @param mixed $content
 * @return void
 */
function __construct(?string $type = null, $content = null)
    {
        parent::__construct($content);
        $this->tag = 'script';
        if ($type !== null) {
            $this->setAttribute('type', $type);
        }
    }
}

