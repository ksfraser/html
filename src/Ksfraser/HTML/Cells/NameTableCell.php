<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**
 * NameTableCell - Builds reusable Name cells for any table
 *
 * SRP: Single responsibility of formatting Name cells consistently.
 * Handles: Name cell styling, HTML escaping, N/A fallback.
 *
 *
 * @package Ksfraser\HTML\Cells
 * @since 1.0.1 2026-02-16
 */
class NameTableCell extends BaseTableCell {
    /**
     * Build Name cell
     * 
     * @param mixed $name The name value
     * @return TableData
 * @since 1.0.1 2026-02-16
     */
    public function build($name): TableData {
        $cell = (new TableData())
            ->addClass('name-cell')
            ->setText(htmlspecialchars($name ?? ''));
        
        return $this->applyAttributes($cell);
    }
}
