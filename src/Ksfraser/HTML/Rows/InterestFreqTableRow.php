<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;
use Ksfraser\HTML\Elements\TableData;
use Ksfraser\HTML\Elements\Button;
use Ksfraser\HTML\Elements\Div;

/**
 * InterestFreqTableRow - Builds interest frequency table rows
 * 
 * SRP: Single responsibility of building an interest frequency row from frequency data.
 * Handles: ID, Name, Description, Edit/Delete actions.
 * 
 * @package Ksfraser\HTML\Rows
 */
class InterestFreqTableRow extends BaseTableRow {
    /**
     * Build interest frequency row
     * 
     * @param object $freq Frequency object with id, name, description
     * @return TableRow
     */
    public function build(object $freq): TableRow {
        $row = (new TableRow())->addClass('data-row');
        
        // ID cell
        $row->append((new TableData())
            ->addClass('id-cell')
            ->setText((string)($freq->id ?? 'N/A'))
        );
        
        // Name cell
        $row->append((new TableData())
            ->addClass('name-cell')
            ->setText(htmlspecialchars($freq->name ?? ''))
        );
        
        // Description cell
        $row->append((new TableData())
            ->addClass('description-cell')
            ->setText(htmlspecialchars($freq->description ?? ''))
        );
        
        // Actions cell
        $actionsCell = (new TableData())->addClass('actions-cell');
        $actionsDiv = (new Div())->addClass('action-buttons');
        
        $editBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.interestFreqHandler && window.interestFreqHandler.edit(' . intval($freq->id ?? 0) . ')');
        $actionsDiv->append($editBtn);
        
        $deleteBtn = (new Button())
            ->setType('button')
            ->addClass('btn-small btn-delete')
            ->setText('Delete')
            ->setAttribute('onclick', 'window.interestFreqHandler && window.interestFreqHandler.delete(' . intval($freq->id ?? 0) . ')');
        $actionsDiv->append($deleteBtn);
        
        $actionsCell->append($actionsDiv);
        $row->append($actionsCell);
        
        return $row;
    }
}
