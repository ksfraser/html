<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**
 * BaseTableCell - Abstract base for reusable table cells
 * 
 * SRP: Single responsibility of building specific cell types.
 * Each cell class handles formatting, styling, and content for its domain.
 * 
 * @package Ksfraser\HTML\Cells
 */
abstract class BaseTableCell {
    /**
     * Build a table cell with appropriate content and styling
     * 
     * @param mixed $value The value to display in the cell
     * @return TableData
     */
    abstract public function build($value): TableData;
}
