<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * Abstract HtmlScript - Template for script tag subclasses
 *
 * Provides common logic for script tags. Subclasses should specify script type and content.
 *
 *
 *
 * @package Ksfraser\HTML
 * @since v1.0.0 2026-04-11
 */
class HtmlScript extends HtmlElement
{
    /**
     * Constructor for script elements
     *
 * @param ?string $type
 * @param mixed $content
 * @return void
 * @since v1.0.0 2026-04-11
 */
public function __construct(?string $type = null, $content = null)
    {
        parent::__construct($content);
        $this->tag = 'script';
        if ($type !== null) {
            $this->setAttribute('type', $type);
        }
    }
}

