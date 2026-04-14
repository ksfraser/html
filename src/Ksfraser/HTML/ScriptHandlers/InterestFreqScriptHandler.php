<?php
namespace Ksfraser\HTML\ScriptHandlers;

use Ksfraser\HTML\Elements\HtmlScript;

/**
 * InterestFreqScriptHandler - Script setup for interest frequency operations
 *
 * SRP: Single responsibility of building interest frequency handler scripts.
 * Returns handler class loader and event listener setup.
 *
 *
 * @package Ksfraser\HTML\ScriptHandlers
 * @since 1.0.1 2026-02-16
 */
class InterestFreqScriptHandler extends BaseScriptHandler {
    /**
     * Build handler scripts
     * 
 * @return array
 * @since 1.0.1 2026-02-16
 */
public function build(): array {
        return [
            // Load handler classes
            (new HtmlScript())->setAttribute('src', '/js/handlers/BaseHandler.js'),
            (new HtmlScript())->setAttribute('src', '/js/handlers/InterestFreqHandler.js'),
            
            // Setup event listeners
            (new HtmlScript())->setContent($this->getEventListeners())
        ];
    }

    /**
     * Get inline event listener code
     * 
     * @return string
     * @private
 * @since v1.0.0 2026-04-13
     */
    private function getEventListeners(): string {
        return <<<'JS'
// Event listeners for interest frequency handler responses
document.addEventListener('interestFreqEdit', (e) => {
    console.log('Frequency edit event:', e.detail);
    // TODO: Open edit modal/form with frequency data
    // window.showEditFrequencyModal(e.detail.data);
});

document.addEventListener('interestFreqDeleted', (e) => {
    console.log('Frequency deleted event:', e.detail);
    // TODO: Reload table or remove row from DOM
    // window.location.reload();
});

document.addEventListener('interestFreqCreated', (e) => {
    console.log('Frequency created event:', e.detail);
    // TODO: Reload table or add new row to DOM
    // window.location.reload();
});

document.addEventListener('interestFreqUpdated', (e) => {
    console.log('Frequency updated event:', e.detail);
    // TODO: Update table row with new data
    // window.location.reload();
});
JS;
    }
}

