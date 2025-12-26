<?php
namespace Ksfraser\HTML\Elements;

/**
 * CreateActionLink - Specialized link for create actions
 * 
 * Extends ActionLink with defaults for create operations.
 * 
 * @package Ksfraser\HTML\Elements
 */
class CreateActionLink extends ActionLink {
    /**
     * @var string Default label for create links
     */
    protected string $label = 'Create';
    
    /**
     * Constructor
     * 
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters
     */
    public function __construct(?string $text = null, array $params = []) {
        parent::__construct();
        $this->setAction('create', $params);
        $this->setText($text ?? $this->label);
    }
    
    /**
     * Set the label for this create link
     * 
     * @param string $label
     * @return self
     */
    public function setLabel(string $label): self {
        $this->label = $label;
        $this->setText($label);
        return $this;
    }
    
    /**
     * Get the current label
     * 
     * @return string
     */
    public function getLabel(): string {
        return $this->label;
    }
}
