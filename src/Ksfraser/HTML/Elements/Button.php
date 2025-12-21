<?php
namespace Ksfraser\HTML\Elements;

/**
 * Button - Convenience wrapper for HTML button element
 * 
 * Extends HtmlButton to provide render() convenience method.
 * 
 * @package Ksfraser\HTML\Elements
 */
class Button extends HtmlButton {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML button element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
