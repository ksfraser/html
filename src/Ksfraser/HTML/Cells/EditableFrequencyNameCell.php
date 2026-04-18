<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * EditableFrequencyNameCell - Encapsulates name cell configuration for frequency rows

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

 * SRP: Encapsulate the specific configuration for editable name cells in frequency tables.

 * 

 * 

 * 

 * Takes variable parts (freqId, rowPrefix, value) and applies fixed configuration.

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
class EditableFrequencyNameCell extends NameTableCell {
    /**
     * Build editable frequency name cell
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $value The name value
     * @param mixed $freqId The frequency ID
     * @param string $rowPrefix The row prefix for cell ID generation
     * @return TableData
     */
    public function buildEditable($value, $freqId, string $rowPrefix): TableData {
        $this->setId("name-cell-{$rowPrefix}")
            ->setAttribute('data-freq-id', (string)$freqId)
            ->setAttribute('data-field', 'name')
            ->setDblClickHandler('editFreqCell(this)')
            ->setEditable(true);
        
        return parent::build($value);
    }
}
