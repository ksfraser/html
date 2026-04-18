<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Edit Action Button Class

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

 * Specialized button for edit actions in tables/forms.

 * 

 * 

 * 

 * Encapsulates the onclick handler setup and button styling for edit operations.

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

 * - Automatic onclick handler generation

 * 

 * 

 * 

 * - JavaScript function call support (e.g., editOption(...))

 * 

 * 

 * 

 * - CSS class configuration for styling

 * 

 * 

 * 

 * - Fluent interface for method chaining

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

 * - Single Responsibility: Only handles edit button generation

 * 

 * 

 * 

 * - Open/Closed: Can be extended for custom edit behaviors

 * 

 * 

 * 

 * - Liskov Substitution: Can replace ActionButton safely

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

 * $editBtn = new EditButton(

 * 

 * 

 * 

 *     new HtmlString('Edit'),

 * 

 * 

 * 

 *     '123',

 * 

 * 

 * 

 *     "editOption(123, 'John', 'Doe', '2025-01-01')"

 * 

 * 

 * 

 * );

 * 

 * 

 * 

 * $editBtn->setCssClass('btn btn-primary btn-sm');

 * 

 * 

 * 

 * echo $editBtn->getHtml();

 * 

 * 

 * 

 * // Output: <input type="button" value="Edit" name="edit_btn_123" onclick="editOption(123, 'John', 'Doe', '2025-01-01')" class="btn btn-primary btn-sm" />

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
class EditButton extends ActionButton
{
    /**
     *
     * @var string The JavaScript function call for the onclick handler
     * @return void
     */
    protected $onclickFunction = '';

    /**

     * Constructor

     *

     * @since 1.0.1 2026-02-16

     * @param HtmlElementInterface $label

     * @param mixed $actionId

     * @param mixed $onclickFunction

     * @return void

     */
public function __construct(HtmlElementInterface $label, $actionId = '', $onclickFunction = '')
    {
        $this->onclickFunction = $onclickFunction;
        parent::__construct('edit', $label, $actionId);
    }

    /**

     * Setup edit button attributes

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    protected function setupActionButton()
    {
        $this->setName('edit_btn_' . $this->actionId);
        
        if (!empty($this->onclickFunction)) {
            $this->setOnclick($this->onclickFunction);
        }
        
        $this->setCssClass('btn btn-primary btn-sm');
    }

}

