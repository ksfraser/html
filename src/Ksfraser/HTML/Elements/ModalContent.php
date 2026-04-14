<?php
namespace Ksfraser\HTML\Elements;

/**
 * ModalContent - Modal content area component
 *
 * Creates the content container within a modal.
 * SRP: Single responsibility of building modal content structure.
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since v1.0.0 2026-04-11
 */
class ModalContent extends Div {
    /**
     * Constructor
 * @return void
 * @since v1.0.0 2026-04-11
     */
    public function __construct() {
        parent::__construct();
        $this->addClass('modal-content');
    }
    
    /**
     * Get stylesheet path for modal content styling
     * 
     * @return string
 * @since v1.0.0 2026-04-13
     */
    public static function getStylesheetPath(): string {
        return '/css/modal.css';
    }
}
