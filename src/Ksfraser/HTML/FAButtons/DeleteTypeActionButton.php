<?php
namespace Ksfraser\HTML\FAButtons;

use Ksfraser\HTML\Button\Button;

/**

 * DeleteTypeActionButton - Encapsulates delete button for loan type rows

 *

 * 

 * SRP: Encapsulate the specific configuration for delete button in loan type tables.

 * Takes variable parts (typeId) and applies fixed configuration (onclick handler, styling).

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML\Buttons

 */
class DeleteTypeActionButton extends Button {
    /**
     * Build delete type action button
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $typeId The type ID
     * @return Button
     */
    public function build($typeId): Button {
        return $this
            ->setType('button')
            ->addClass('btn-small btn-delete')
            ->setText('Delete')
            ->setAttribute('onclick', 'window.loanTypeHandler && window.loanTypeHandler.delete(' . intval($typeId ?? 0) . ')');
            return $this;
    }
}
