<?php
namespace Ksfraser\HTML\Elements;

/**
 * AddActionLink - Specialized link for add actions
 * 
 * Extends ActionLink with defaults for add operations.
 * Similar to Create but uses "add" action name.
 * 
 * @package Ksfraser\HTML\Elements
 */
class AddActionLink extends ActionLink {
    /**
     * @var string Default label for add links
     */
    protected string $label = 'Add';
    
    /**
     * Constructor
     * 
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters
     */
    public function __construct(?string $text = null, array $params = []) {
        parent::__construct();
        $this->setAction('add', $params);
        $this->setText($text ?? $this->label);
    }
    
    /**
     * Set the label for this add link
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
