<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * AmountTableCell - Builds Amount cells for loan tables

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

 * SRP: Single responsibility of formatting Amount cells consistently.

 * 

 * 

 * 

 * Handles: Currency formatting, cell styling, N/A fallback.

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
 * AmountTableCell
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class AmountTableCell extends BaseTableCell {
    /**
     * Build Amount cell with currency formatting
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $amount The amount value
     * @return TableData
     */
    public /**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @param mixed $amount
 * @return TableData
 */
/**
 * build
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $amount
 * @return TableData
 */
function build($amount): TableData {
        $amountText = isset($amount) 
            ? '$' . number_format((float)$amount, 2)
            : 'N/A';
            
        $cell = (new TableData())
            ->addClass('amount-cell')
            ->setText($amountText);
        
        return $this->applyAttributes($cell);
    }
}
