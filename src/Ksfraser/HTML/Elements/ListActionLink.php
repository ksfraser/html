<?php
namespace Ksfraser\HTML\Elements;

/**
 * ListActionLink - Specialized link for list/index actions
 * 
 * Extends ActionLink with defaults for list operations.
 * 
 * @package Ksfraser\HTML\Elements
 */
class ListActionLink extends ActionLink {
    /**
     * @var string Default label for list links
     */
    protected string $label = 'List';
    
    /**
     * Constructor
     * 
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters (e.g., filters, pagination)
     */
    public function __construct(?string $text = null, array $params = []) {
        parent::__construct();
        $this->setAction('list', $params);
        $this->setText($text ?? $this->label);
    }
    
    /**
     * Set the label for this list link
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
