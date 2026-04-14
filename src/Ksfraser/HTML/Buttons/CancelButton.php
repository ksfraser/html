<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * Cancel Action Button Class
 *
 * Specialized button for cancel actions.
 * Encapsulates cancel button styling and behavior.
 *
 * Features:
 * - Secondary styling by default (gray background)
 * - JavaScript function call support for custom cancel handlers
 * - Optional redirect functionality
 *
 * SOLID Principles:
 * - Single Responsibility: Only handles cancel button generation
 * - Open/Closed: Can be extended for custom cancel behaviors
 *
 *
 * ```php
 * $cancelBtn = new CancelButton(new HtmlString('Cancel'));
 * $cancelBtn->setOnclickFunction("window.history.back();");
 * echo $cancelBtn->getHtml();
 * ```
 *
 * @package Ksfraser\HTML
 * @author Kevin Fraser
 * @example
 * @since 1.0.1 2026-02-16
 */
class CancelButton extends ActionButton
{
    /**
     * Constructor
     * 
     * @param HtmlElementInterface|null $label The button label (default: "Cancel")
     */
    /**
 * @param mixed $label
 * @return void
 * @since 1.0.1 2026-02-16
 */
public function __construct($label = null)
    {
        if ($label === null) {
            $label = new \Ksfraser\HTML\Elements\HtmlString('Cancel');
        }
        parent::__construct('cancel', $label);
    }

    /**
     * Setup cancel button attributes
     * 
     * @return void
 * @since v1.0.0 2026-04-13
     */
    protected function setupActionButton()
    {
        $this->setName('cancel_btn');
        $this->setCssClass('btn btn-secondary btn-sm');
    }


    /**
     * Set cancel to go back in history
     * 
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function setGoBack()
    {
        return $this->setOnclickFunction("window.history.back();");
    }
}

