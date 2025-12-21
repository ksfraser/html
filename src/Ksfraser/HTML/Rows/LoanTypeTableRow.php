<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;
use Ksfraser\HTML\Elements\TableData;
use Ksfraser\HTML\Elements\Button;
use Ksfraser\HTML\Elements\Div;
use Ksfraser\HTML\Cells\IdTableCell;
use Ksfraser\HTML\Cells\NameTableCell;
use Ksfraser\HTML\Cells\DescriptionTableCell;

/**
 * LoanTypeTableRow - Builds loan type table rows
 * 
 * SRP: Single responsibility of building a loan type row from loan type data.
 * Handles: Row structure and action buttons. Uses cell classes for content cells.
 * 
 * @package Ksfraser\HTML\Rows
 */
class LoanTypeTableRow extends BaseTableRow {
    /**
     * Build loan type row
     * 
     * @param object $type Loan type object with id, name, description
     * @return TableRow
     */
    public function build(object $type): TableRow {
        $row = (new TableRow())->addClass('data-row');
        
        // Content cells built by dedicated cell classes
        $row->append((new IdTableCell())->build($type->id ?? null));
        $row->append((new NameTableCell())->build($type->name ?? null));
        $row->append((new DescriptionTableCell())->build($type->description ?? null));
        
        // Actions cell
        $actionsCell = (new TableData())->addClass('actions-cell');
        $actionsDiv = (new Div())->addClass('action-buttons');
        
        $editBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.loanTypeHandler && window.loanTypeHandler.edit(' . intval($type->id ?? 0) . ')');
        $actionsDiv->append($editBtn);
        
        $deleteBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-delete')
            ->setText('Delete')
            ->setAttribute('onclick', 'window.loanTypeHandler && window.loanTypeHandler.delete(' . intval($type->id ?? 0) . ')');
        $actionsDiv->append($deleteBtn);
        
        $actionsCell->append($actionsDiv);
        $row->append($actionsCell);
        
        return $row;
    }
}
