<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlScriptLanguage;

/**
 * Abstract HtmlScript - Template for script tag subclasses
 * 
 * Provides common logic for script tags. Subclasses should specify script type and content.
 * 
 * @package Ksfraser\HTML
 */
abstract class HtmlScript extends HtmlElement
{
    /**
     * Constructor for script tag subclasses
     * @param string $type The script type attribute (e.g., 'text/javascript')
     * @param \Ksfraser\HTML\HtmlElementInterface|null $content Script content
     */
    protected function __construct(string $type = '', ?\Ksfraser\HTML\HtmlElementInterface $content = null)
    {
        parent::__construct($content);
        $this->tag = 'script';
        if ($type !== '') {
            $this->setAttribute('type', $type);
        }
    }
}
