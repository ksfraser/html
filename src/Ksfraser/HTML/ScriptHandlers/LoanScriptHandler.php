<?php
namespace Ksfraser\HTML\ScriptHandlers;

use Ksfraser\HTML\Elements\HtmlScript;

/**

 * LoanScriptHandler - Script setup for loan operations

 *

 * 

 * SRP: Single responsibility of building loan handler scripts.

 * Returns handler class loader and event listener setup.

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML\ScriptHandlers

 */
class LoanScriptHandler extends BaseScriptHandler {
    /**
     * Build handler scripts
     *
     * @since 1.0.1 2026-02-16
     * @return array
     */
public function build(): array {
        return [
            // Load handler classes
            (new HtmlScript())->setAttribute('src', '/js/handlers/BaseHandler.js'),
            (new HtmlScript())->setAttribute('src', '/js/handlers/LoanHandler.js'),
            
            // Setup event listeners
            (new HtmlScript())->setContent($this->getEventListeners())
        ];
    }

    /**

     * Get inline event listener code

     *

     * @since v1.0.0 2026-04-13

     * @private 

     * @return string

     */
    private function getEventListeners(): string {
        return <<<'JS'
// Event listeners for loan handler responses
document.addEventListener('loanViewed', (e) => {
    console.log('Loan viewed event:', e.detail);
    // TODO: Display loan details modal/panel
    // window.showLoanDetailsModal(e.detail.data);
});

document.addEventListener('loanEdit', (e) => {
    console.log('Loan edit event:', e.detail);
    // TODO: Open edit form with loan data
    // window.showEditLoanForm(e.detail.data);
});

document.addEventListener('loanUpdated', (e) => {
    console.log('Loan updated event:', e.detail);
    // TODO: Update table row or reload
    // window.location.reload();
});
JS;
    }
}

