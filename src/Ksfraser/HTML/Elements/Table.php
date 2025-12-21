<?php
namespace Ksfraser\HTML\Elements;

/**
 * Table - Convenience wrapper for HTML table elements
 * 
 * Extends HtmlTable to provide convenience methods for building tables
 * with the fluent builder pattern.
 * 
 * @package Ksfraser\HTML\Elements
 */
class Table extends HtmlTable {
    /**
     * Get HTML representation as string (alias for getHtml)
     * 
     * @return string The complete HTML table element
     */
    public function render(): string {
        return $this->getHtml();
    }
}
