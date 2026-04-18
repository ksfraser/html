<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * Submit Action Button Class

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Specialized button for form submission.

 * 

 * 

 * 

 * Encapsulates submit button styling and behavior.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Features:

 * 

 * 

 * 

 * - Primary styling by default (blue background)

 * 

 * 

 * 

 * - Type="submit" for form submission

 * 

 * 

 * 

 * - JavaScript function call support for validation

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * SOLID Principles:

 * 

 * 

 * 

 * - Single Responsibility: Only handles submit button generation

 * 

 * 

 * 

 * - Open/Closed: Can be extended for custom submit behaviors

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * ```php

 * 

 * 

 * 

 * $submitBtn = new SubmitButton(new HtmlString('Save'));

 * 

 * 

 * 

 * $submitBtn->setOnclickFunction("return validateForm();");

 * 

 * 

 * 

 * echo $submitBtn->getHtml();

 * 

 * 

 * 

 * ```

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML

 * @author Kevin Fraser

 * @example 

 * @return void

 */
class SubmitButton extends ActionButton
{
    /**
     * Constructor
     *
     * @since 1.0.1 2026-02-16
     * @param HtmlElementInterface $label
     * @return void
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

     * @since v1.0.0 2026-04-13

     * @return void

     */
    protected function setupActionButton()
    {
        $this->setName('submit_btn');
        $this->setType('submit');
        $this->setCssClass('btn btn-primary btn-sm');
    }

}

