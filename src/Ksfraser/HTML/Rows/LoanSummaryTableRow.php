<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;
use Ksfraser\HTML\Elements\TableData;
use Ksfraser\HTML\Elements\Button;
use Ksfraser\HTML\Elements\Div;

/**
 * LoanSummaryTableRow - Builds loan summary table rows
 * 
 * SRP: Single responsibility of building a loan summary row from loan data.
 * Handles: ID, Borrower, Amount, Status with color coding, View/Edit actions.
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
        
        // ID cell
        $row->append((new TableData())
            ->addClass('id-cell')
            ->setText((string)($loan->id ?? 'N/A'))
        );
        
        // Borrower cell
        $row->append((new TableData())
            ->addClass('borrower-cell')
            ->setText(htmlspecialchars($loan->borrower ?? ''))
        );
        
        // Amount cell
        $amountText = isset($loan->amount) 
            ? '$' . number_format((float)$loan->amount, 2)
            : 'N/A';
        $row->append((new TableData())
            ->addClass('amount-cell')
            ->setText($amountText)
        );
        
        // Status cell with color coding
        $status = htmlspecialchars($loan->status ?? 'Unknown');
        $statusClass = 'status-' . strtolower(str_replace(' ', '-', $status));
        $row->append((new TableData())
            ->addClass('status-cell ' . $statusClass)
            ->setText($status)
        );
        
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
