<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * DescriptionTableCell - Builds reusable Description cells for any table

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

 * SRP: Single responsibility of formatting Description cells consistently.

 * 

 * 

 * 

 * Handles: Description cell styling, HTML escaping, N/A fallback.

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
 * DescriptionTableCell
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class DescriptionTableCell extends BaseTableCell {
    /**
     * Build Description cell
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $description The description value
     * @return TableData
     */
    public /**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $description
 * @return TableData
 */
/**
 * build
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $description
 * @return TableData
 */
function build($description): TableData {
        $cell = (new TableData())
            ->addClass('description-cell')
            ->setText(htmlspecialchars($description ?? ''));
        
        return $this->applyAttributes($cell);
    }
}
