<?php
namespace Ksfraser\HTML\Elements;

/**
 * EditActionLink - Specialized link for edit actions
 * 
 * Extends ActionLink with defaults for edit operations.
 * Requires an ID parameter.
 * 
 * @package Ksfraser\HTML\Elements
 */
class EditActionLink extends ActionLink {
    /**
     * @var string Default label for edit links
     */
    protected string $label = 'Edit';
    
    /**
     * Constructor
     * 
     * @param int|string $id Entity ID to edit
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters
     */
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('edit', $allParams);
        $this->setText($text ?? $this->label);
    }
    
    /**
     * Set the label for this edit link
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
