<?php
namespace Ksfraser\HTML\FAButtons;

use Ksfraser\HTML\Button\Button;

/**

 * EditFrequencyActionButton - Encapsulates edit button for frequency rows

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

 * SRP: Encapsulate the specific configuration for edit button in frequency tables.

 * 

 * 

 * 

 * Takes variable parts (freqId) and applies fixed configuration (onclick handler, styling).

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
class EditFrequencyActionButton extends Button {
    /**
     * Build edit frequency action button
     *
     * @since 1.0.1 2026-02-16
     * @param mixed $freqId The frequency ID
     * @return Button
     */
    public function build($freqId): Button {
        return $this
            ->setType('button')
            ->addClass('btn-small btn-edit')
            ->setText('Edit')
            ->setAttribute('onclick', 'window.interestFreqHandler && window.interestFreqHandler.edit(' . intval($freqId ?? 0) . ')');
            return $this;
    }
}
