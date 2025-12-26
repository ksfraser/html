<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * Close Action Button Class
 * 
 * Specialized button for close actions (modals, dialogs, etc.).
 * Encapsulates close button styling and behavior.
 * 
 * Features:
 * - Secondary styling by default
 * - JavaScript function call support for custom close handlers
 * - Commonly used for modal/dialog dismissal
 * 
 * SOLID Principles:
 * - Single Responsibility: Only handles close button generation
 * - Open/Closed: Can be extended for custom close behaviors
 * 
 * @package Ksfraser\HTML
 * @author Kevin Fraser
 * @since 20251226
 * 
 * @example
 * ```php
 * $closeBtn = new CloseButton(new HtmlString('Close'));
 * $closeBtn->setOnclickFunction("closeModal();");
 * echo $closeBtn->getHtml();
 * ```
 */
class CloseButton extends ActionButton
{
    /**
     * Constructor
     * 
     * @param HtmlElementInterface|null $label The button label (default: "Close")
     */
    public function __construct(HtmlElementInterface $label = null)
    {
        if ($label === null) {
            $label = new HtmlString('Close');
        }
        parent::__construct('close', $label);
        $this->setCssClass('btn btn-secondary');
    }

    /**
     * Set onclick function for close action
     * 
     * @param string $function JavaScript function to call
     * @return self
     */
    public function setOnclickFunction(string $function): self
    {
        $this->setAttribute('onclick', $function);
        return $this;
    }
}
