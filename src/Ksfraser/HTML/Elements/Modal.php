<?php
namespace Ksfraser\HTML\Elements;

/**

 * Modal - Modal overlay component

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

 * Creates a modal dialog with overlay background.

 * 

 * 

 * 

 * SRP: Single responsibility of building modal structure.

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
class Modal extends Div {
    /**
     *
     * @var string Modal ID
     * @return void
     */
    protected string $modalId = 'modal';
    
    /**
    
     *
    
     * @var ModalContent Modal content component
    
     * @return void
    
     */
    protected ?ModalContent $content = null;
    
    /**
    
     * Constructor
    
     *
    
     * @since v1.0.0 2026-04-11
    
     * @param string $id Modal ID
    
     * @return void
    
     */
    public function __construct(string $id = 'modal') {
        parent::__construct();
        $this->modalId = $id;
        $this->setId($id);
        $this->addClass('modal-overlay');
    }
    
    /**
    
     * Set modal content
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param ModalContent $content
    
     * @return self
    
     */
    public function setContent(ModalContent $content): self {
        $this->content = $content;
        return $this;
    }
    
    /**
    
     * Get modal content
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @return ?ModalContent
    
     */
public function getContent(): ?ModalContent {
        return $this->content;
    }
    
    /**
    
     * Render modal HTML
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string
    
     */
    public function render(): string {
        if ($this->content) {
            $this->append($this->content);
        }
        return parent::render();
    }
    
    /**
    
     * Get stylesheet path for modal styling
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string
    
     */
    public static function getStylesheetPath(): string {
        return '/css/modal.css';
    }
}

