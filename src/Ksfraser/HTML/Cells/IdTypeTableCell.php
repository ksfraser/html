<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**

 * IdTypeTableCell - Encapsulates loan type ID cell configuration

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

 * SRP: Single responsibility of building a type ID cell with fixed configuration.

 * 

 * 

 * 

 * Applies: ID format, data-type-id attribute, and cell type.

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
class IdTypeTableCell {
    /**
     * Build type ID cell with fixed configuration
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $typeId The type ID value
     * @param string $rowPrefix The row prefix for ID generation
     * @return TableData
     */
    public function build($typeId, string $rowPrefix): TableData {
        return (new IdTableCell())
            ->setId("id-cell-{$rowPrefix}")
            ->setAttribute('data-type-id', (string)$typeId)
            ->build($typeId);
    }
}
