<?php
namespace Ksfraser\HTML\Elements;

/**
 * Modal - Modal overlay component
 * 
 * Creates a modal dialog with overlay background.
 * SRP: Single responsibility of building modal structure.
 * 
 * @package Ksfraser\HTML\Elements
 */
class Modal extends Div {
    /**
     * @var string Modal ID
     */
    protected string $modalId = 'modal';
    
    /**
     * @var ModalContent Modal content component
     */
    protected ?ModalContent $content = null;
    
    /**
     * Constructor
     * 
     * @param string $id Modal ID
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
     * @return ModalContent|null
     */
    public function getContent(): ?ModalContent {
        return $this->content;
    }
    
    /**
     * Render modal HTML
     * 
     * @return string
     */
    public function render(): string {
        if ($this->content) {
            $this->append($this->content);
        }
        return parent::render();
    }
    
    /**
     * Get CSS for modal styling
     * 
     * @return string
     */
    public static function getStyles(): string {
        return <<<'CSS'
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
CSS;
    }
}
