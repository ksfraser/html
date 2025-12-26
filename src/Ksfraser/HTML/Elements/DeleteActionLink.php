<?php
namespace Ksfraser\HTML\Elements;

/**
 * DeleteActionLink - Specialized link for delete actions
 * 
 * Extends ActionLink with defaults for delete operations.
 * Requires an ID parameter and includes confirmation prompt.
 * 
 * @package Ksfraser\HTML\Elements
 */
class DeleteActionLink extends ActionLink {
    /**
     * @var string Default label for delete links
     */
    protected string $label = 'Delete';
    
    /**
     * @var string Confirmation message
     */
    protected string $confirmMessage = 'Are you sure you want to delete this item?';
    
    /**
     * Constructor
     * 
     * @param int|string $id Entity ID to delete
     * @param string|null $text Link text (uses label if null)
     * @param array $params Additional query parameters
     */
    public function __construct($id, ?string $text = null, array $params = []) {
        parent::__construct();
        $allParams = array_merge(['id' => $id], $params);
        $this->setAction('delete', $allParams);
        $this->setText($text ?? $this->label);
        $this->setAttribute('onclick', 'return confirm("' . addslashes($this->confirmMessage) . '");');
    }
    
    /**
     * Set the label for this delete link
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
    
    /**
     * Set custom confirmation message
     * 
     * @param string $message
     * @return self
     */
    public function setConfirmMessage(string $message): self {
        $this->confirmMessage = $message;
        $this->setAttribute('onclick', 'return confirm("' . addslashes($message) . '");');
        return $this;
    }
    
    /**
     * Get the confirmation message
     * 
     * @return string
     */
    public function getConfirmMessage(): string {
        return $this->confirmMessage;
    }
}
