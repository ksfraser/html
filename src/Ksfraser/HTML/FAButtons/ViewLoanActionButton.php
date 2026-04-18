<?php
namespace Ksfraser\HTML\FAButtons;

use Ksfraser\HTML\Button\Button;

/**

 * ViewLoanActionButton - Encapsulates view button for loan rows

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

 * SRP: Encapsulate the specific configuration for view button in loan summaries.

 * 

 * 

 * 

 * Takes variable parts (loanId) and applies fixed configuration (onclick handler, styling).

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

 * @package Ksfraser\HTML\Buttons

 * @return void

 */
/**
 * ViewLoanActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class ViewLoanActionButton extends Button {
    /**
     * Build view loan action button
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $loanId The loan ID
     * @return Button
     */
    public /**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $loanId
 * @return Button
 */
/**
 * build
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $loanId
 * @return Button
 */
function build($loanId): Button {
        return $this
            ->setType('button')
            ->addClass('btn-small btn-view')
            ->setText('View')
            ->setAttribute('onclick', 'window.loanHandler && window.loanHandler.view(' . intval($loanId ?? 0) . ')');
            return $this;
    }
}
