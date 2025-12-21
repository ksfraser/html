<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;
use Ksfraser\HTML\Elements\TableData;
use Ksfraser\HTML\Elements\Button;
use Ksfraser\HTML\Elements\Div;
use Ksfraser\HTML\Cells\IdTableCell;
use Ksfraser\HTML\Cells\BorrowerTableCell;
use Ksfraser\HTML\Cells\AmountTableCell;
use Ksfraser\HTML\Cells\StatusTableCell;

/**
 * LoanSummaryTableRow - Builds loan summary table rows
 * 
 * SRP: Single responsibility of building a loan summary row from loan data.
 * Handles: Row structure and action buttons. Uses cell classes for content cells.
 * 
 * @package Ksfraser\HTML\Rows
 */
class LoanSummaryTableRow extends BaseTableRow {
    /**
     * Build loan summary row
     * 
     * @param object $loan Loan object with id, borrower, amount, status
     * @return TableRow
     */
    public function build(object $loan): TableRow {
        $row = (new TableRow())->addClass('data-row');
        
        // Content cells built by dedicated cell classes
        $row->append((new IdTableCell())->build($loan->id ?? null));
        $row->append((new BorrowerTableCell())->build($loan->borrower ?? null));
        $row->append((new AmountTableCell())->build($loan->amount ?? null));
        $row->append((new StatusTableCell())->build($loan->status ?? null));
        
        // Actions cell
        $actionsCell = (new TableData())->addClass('actions-cell');
        $actionsDiv = (new Div())->addClass('action-buttons');
        
        $viewBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-view')
            ->setText('View')
            ->setAttribute('onclick', 'window.loanHandler && window.loanHandler.view(' . intval($loan->id ?? 0) . ')');
        $actionsDiv->append($viewBtn);
        
        $editBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.loanHandler && window.loanHandler.edit(' . intval($loan->id ?? 0) . ')');
        $actionsDiv->append($editBtn);
        
        $actionsCell->append($actionsDiv);
        $row->append($actionsCell);
        
        return $row;
    }
}
