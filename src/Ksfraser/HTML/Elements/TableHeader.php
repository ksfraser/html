<?php
namespace Ksfraser\HTML\Elements;

/**
 * TableHeader - Convenience wrapper for HTML table header cell element
 * 
 * Extends HtmlTableHeaderCell to provide render() convenience method.
 * 
 * @package Ksfraser\HTML\Elements
 */
class TableHeader extends HtmlTableHeaderCell {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML table header cell element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
