<?php
namespace Ksfraser\HTML\Elements;

/**
 * Div - Convenience wrapper for HTML div element
 * 
 * Extends HtmlDiv to provide render() convenience method.
 * 
 * @package Ksfraser\HTML\Elements
 */
class Div extends HtmlDiv {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML div element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
