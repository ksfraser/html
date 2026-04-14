<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Add Action Button Class

 *

 * 

 * Specialized button for add/create actions.

 * Encapsulates the add button styling and behavior.

 * 

 * Features:

 * - Success styling by default (green background)

 * - Form submission support

 * - JavaScript function call support for custom add handlers

 * 

 * SOLID Principles:

 * - Single Responsibility: Only handles add button generation

 * - Open/Closed: Can be extended for custom add behaviors

 * 

 * 

 * ```php

 * $addBtn = new AddButton(new HtmlString('Add New'));

 * $addBtn->setCssClass('btn btn-success btn-lg');

 * echo $addBtn->getHtml();

 * ```

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML

 * @author Kevin Fraser

 * @example 

 */
class AddButton extends ActionButton
{
    /**
     * Constructor
     *
     * @since 1.0.1 2026-02-16
     * @param HtmlElementInterface $label The button label (default: "Add")
     * @return void
     */
    public function __construct(HtmlElementInterface $label)
    {
        parent::__construct('add', $label);
    }

    /**

     * Setup add button attributes

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    protected function setupActionButton()
    {
        $this->setName('add_btn');
        $this->setCssClass('btn btn-success btn-sm');
    }
}
