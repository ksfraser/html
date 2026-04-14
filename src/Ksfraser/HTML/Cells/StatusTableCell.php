<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**
 * StatusTableCell - Builds Status cells with color coding
 *
 * SRP: Single responsibility of formatting Status cells with consistent styling.
 * Handles: Status cell styling, color class generation, HTML escaping.
 *
 *
 * @package Ksfraser\HTML\Cells
 * @since 1.0.1 2026-02-16
 */
class StatusTableCell extends BaseTableCell {
    /**
     * Build Status cell with color coding
     * 
     * @param mixed $status The status value
     * @return TableData
 * @since 1.0.1 2026-02-16
     */
    public function build($status): TableData {
        $statusText = htmlspecialchars($status ?? 'Unknown');
        $statusClass = 'status-' . strtolower(str_replace(' ', '-', $statusText));
        
        $cell = (new TableData())
            ->addClass('status-cell ' . $statusClass)
            ->setText($statusText);
        
        return $this->applyAttributes($cell);
    }
}
