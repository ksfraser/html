<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;
use Ksfraser\HTML\Elements\TableData;
use Ksfraser\HTML\Elements\Button;
use Ksfraser\HTML\Elements\Div;

/**
 * LoanTypeTableRow - Builds loan type table rows
 * 
 * SRP: Single responsibility of building a loan type row from loan type data.
 * Handles: ID, Name, Description, Edit/Delete actions.
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
        
        // ID cell
        $row->append((new TableData())
            ->addClass('id-cell')
            ->setText((string)($type->id ?? 'N/A'))
        );
        
        // Name cell
        $row->append((new TableData())
            ->addClass('name-cell')
            ->setText(htmlspecialchars($type->name ?? ''))
        );
        
        // Description cell
        $row->append((new TableData())
            ->addClass('description-cell')
            ->setText(htmlspecialchars($type->description ?? ''))
        );
        
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
