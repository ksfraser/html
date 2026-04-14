<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;

/**
 * Delete Action Button Class
 *
 * Specialized button for delete actions in tables/forms.
 * Encapsulates the deletion button styling and onclick behavior.
 *
 * Features:
 * - Automatic confirmation dialog option
 * - Danger styling by default (red background)
 * - JavaScript function call support for custom delete handlers
 * - Form submission support for server-side deletion
 *
 * SOLID Principles:
 * - Single Responsibility: Only handles delete button generation
 * - Open/Closed: Can be extended for custom delete behaviors
 *
 *
 * ```php
 * $deleteBtn = new DeleteButton(
 *     new HtmlString('Delete'),
 *     '123'
 * );
 * $deleteBtn->setConfirmation("Are you sure you want to delete this item?");
 * echo $deleteBtn->getHtml();
 * ```
 *
 * @package Ksfraser\HTML
 * @author Kevin Fraser
 * @example
 * @since 1.0.1 2026-02-16
 */
class DeleteButton extends ActionButton
{
    /**
     * @var string Confirmation message for delete action
     */
    protected $confirmationMessage = 'Are you sure?';

    /**
     * Constructor
     * 
 * @param HtmlElementInterface $label
 * @param mixed $actionId
 * @return void
 * @since 1.0.1 2026-02-16
 */
public function __construct(HtmlElementInterface $label, $actionId = '')
    {
        parent::__construct('delete', $label, $actionId);
    }

    /**
     * Setup delete button attributes
     * 
     * @return void
 * @since v1.0.0 2026-04-13
     */
    protected function setupActionButton()
    {
        $this->setName('delete_btn_' . $this->actionId);
        $this->setCssClass('btn btn-danger btn-sm');
        
        // Default confirmation onclick
        $this->setOnclick("return confirm('" . addslashes($this->confirmationMessage) . "');");
    }

    /**
     * Set custom confirmation message
     * 
     * @return self Fluent interface
 * @param mixed $message
 * @since v1.0.5 2026-04-14
 */
public function setConfirmation($message)
    {
        $this->confirmationMessage = $message;
        $this->setOnclick("return confirm('" . addslashes($message) . "');");
        return $this;
    }

    /**
     * Disable confirmation dialog
     * 
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function noConfirmation()
    {
        $this->confirmationMessage = '';
        $this->addAttribute(new HtmlAttribute('onclick', '')); // Clear onclick
        return $this;
    }
}

