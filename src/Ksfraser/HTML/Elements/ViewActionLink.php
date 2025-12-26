<?php
namespace Ksfraser\HTML\Elements;

/**
 * ViewActionLink - Specialized link for view actions
 * 
 * Extends ActionLink with defaults for view operations.
 * Requires an ID parameter.
 * 
 * @package Ksfraser\HTML\Elements
 */
class ViewActionLink extends ActionLink {
    /**
     * @var string Default label for view links
     */
    protected string $label = 'View';
    
    /**
     * Constructor
     * 
     * @param int|string $id Entity ID to view
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters
     */
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('view', $allParams);
        $this->setText($text ?? $this->label);
    }
    
    /**
     * Set the label for this view link
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
