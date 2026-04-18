<?php
namespace Ksfraser\HTML\FAButtons;

use Ksfraser\HTML\Button\Button;

/**

 * EditTypeActionButton - Encapsulates edit button for loan type rows

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

 * SRP: Encapsulate the specific configuration for edit button in loan type tables.

 * 

 * 

 * 

 * Takes variable parts (typeId) and applies fixed configuration (onclick handler, styling).

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
 * EditTypeActionButton
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class EditTypeActionButton extends Button {
    /**
     * Build edit type action button
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $typeId The type ID
     * @return Button
     */
    public /**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @param mixed $typeId
 * @return Button
 */
/**
 * build
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $typeId
 * @return Button
 */
function build($typeId): Button {
        return $this
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.loanTypeHandler && window.loanTypeHandler.edit(' . intval($typeId ?? 0) . ')');
            return $this;
    }
}
