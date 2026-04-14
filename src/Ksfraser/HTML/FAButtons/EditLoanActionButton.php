<?php
namespace Ksfraser\HTML\FAButtons;

use Ksfraser\HTML\Button\Button;

/**
 * EditLoanActionButton - Encapsulates edit button for loan rows
 *
 * SRP: Encapsulate the specific configuration for edit button in loan summaries.
 * Takes variable parts (loanId) and applies fixed configuration (onclick handler, styling).
 *
 *
 * @package Ksfraser\HTML\Buttons
 * @since 1.0.1 2026-02-16
 */
class EditLoanActionButton extends Button {
    /**
     * Build edit loan action button
     * 
     * @param mixed $loanId The loan ID
     * @return Button
 * @since 1.0.1 2026-02-16
     */
    public function build($loanId): Button {
        return $this
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.loanHandler && window.loanHandler.edit(' . intval($loanId ?? 0) . ')');
            return $this;
    }
}
