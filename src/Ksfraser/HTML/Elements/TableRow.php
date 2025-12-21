<?php
namespace Ksfraser\HTML\Elements;

/**
 * TableRow - Convenience wrapper for HTML table row element
 * 
 * Extends HtmlTableRow to provide render() convenience method.
 * 
 * @package Ksfraser\HTML\Elements
 */
class TableRow extends HtmlTableRow {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML table row element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
