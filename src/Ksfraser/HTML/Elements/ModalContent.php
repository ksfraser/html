<?php
namespace Ksfraser\HTML\Elements;

/**

 * ModalContent - Modal content area component

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

 * Creates the content container within a modal.

 * 

 * 

 * 

 * SRP: Single responsibility of building modal content structure.

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

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML\Elements

 * @return void

 */
class ModalContent extends Div {
    /**
     * Constructor
     *
     * @since v1.0.0 2026-04-11
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->addClass('modal-content');
    }
    
    /**
    
     * Get stylesheet path for modal content styling
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string
    
     */
    public static function getStylesheetPath(): string {
        return '/css/modal.css';
    }
}
