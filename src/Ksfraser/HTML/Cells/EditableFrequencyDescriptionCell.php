<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * EditableFrequencyDescriptionCell - Encapsulates description cell configuration for frequency rows

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

 * SRP: Encapsulate the specific configuration for editable description cells in frequency tables.

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
class EditableFrequencyDescriptionCell extends DescriptionTableCell {
    /**
     * Build editable frequency description cell
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $value The description value
     * @param mixed $freqId The frequency ID
     * @param string $rowPrefix The row prefix for cell ID generation
     * @return TableData
     */
    public function buildEditable($value, $freqId, string $rowPrefix): TableData {
        $this->setId("description-cell-{$rowPrefix}")
            ->setAttribute('data-freq-id', (string)$freqId)
            ->setAttribute('data-field', 'description')
            ->setDblClickHandler('editFreqCell(this)')
            ->setEditable(true);
        
        return parent::build($value);
    }
}
