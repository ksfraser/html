<?php
namespace Ksfraser\HTML\Elements;

/**
 * ModalContent - Modal content area component
 * 
 * Creates the content container within a modal.
 * SRP: Single responsibility of building modal content structure.
 * 
 * @package Ksfraser\HTML\Elements
 */
class ModalContent extends Div {
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->addClass('modal-content');
    }
    
    /**
     * Get CSS for modal content styling
     * 
     * @return string
     */
    public static function getStyles(): string {
        return <<<'CSS'
.modal-content {
    background: white;
    padding: 20px;
    border-radius: 8px;
    max-width: 90%;
    max-height: 90%;
    overflow: auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}
CSS;
    }
}
