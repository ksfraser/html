<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * Submit Action Button Class
 * 
 * Specialized button for form submission.
 * Encapsulates submit button styling and behavior.
 * 
 * Features:
 * - Primary styling by default (blue background)
 * - Type="submit" for form submission
 * - JavaScript function call support for validation
 * 
 * SOLID Principles:
 * - Single Responsibility: Only handles submit button generation
 * - Open/Closed: Can be extended for custom submit behaviors
 * 
 * @package Ksfraser\HTML
 * @author Kevin Fraser
 * @since 20251226
 * 
 * @example
 * ```php
 * $submitBtn = new SubmitButton(new HtmlString('Save'));
 * $submitBtn->setOnclickFunction("return validateForm();");
 * echo $submitBtn->getHtml();
 * ```
 */
class SubmitButton extends ActionButton
{
    /**
     * Constructor
     * 
     * @param HtmlElementInterface|null $label The button label (default: "Submit")
     */
    public function __construct(HtmlElementInterface $label = null)
    {
        if ($label === null) {
            $label = new HtmlString('Submit');
        }
        parent::__construct('submit', $label);
    }

    /**
     * Setup submit button attributes
     *
     * @return void
     */
    protected function setupActionButton()
    {
        $this->setName('submit_btn');
        $this->setType('submit');
        $this->setCssClass('btn btn-primary btn-sm');
    }

    /**
     * Set onclick function for validation
     * 
     * @param string $function JavaScript function to call (should return boolean)
     * @return self
     */
    public function setOnclickFunction(string $function): self
    {
        $this->setAttribute('onclick', $function);
        return $this;
    }
}
