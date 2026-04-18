<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * NameTableCell - Builds reusable Name cells for any table

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * SRP: Single responsibility of formatting Name cells consistently.

 * 

 * 

 * 

 * Handles: Name cell styling, HTML escaping, N/A fallback.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML\Cells

 * @return void

 */
/**
 * NameTableCell
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class NameTableCell extends BaseTableCell {
    /**
     * Build Name cell
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $name The name value
     * @return TableData
     */
    public /**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $name
 * @return TableData
 */
/**
 * build
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return TableData
 */
function build($name): TableData {
        $cell = (new TableData())
            ->addClass('name-cell')
            ->setText(htmlspecialchars($name ?? ''));
        
        return $this->applyAttributes($cell);
    }
}
