<?php
namespace Ksfraser\HTML\Elements;

/**
 * TableData - Convenience wrapper for HTML table cell element
 * 
 * Extends HtmlTableRowCell to provide render() convenience method.
 * 
 * @package Ksfraser\HTML\Elements
 */
class TableData extends HtmlTableRowCell {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML table cell element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
