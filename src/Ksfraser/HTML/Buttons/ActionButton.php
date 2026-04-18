<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\Elements\HtmlInputGenericButton;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Abstract Action Button Class

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

 * Base class for specialized action buttons (Edit, Delete, Add, Cancel).

 * 

 * 

 * 

 * Follows Single Responsibility Principle by encapsulating button-specific logic

 * 

 * 

 * 

 * for common CRUD operations.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Design Patterns:

 * 

 * 

 * 

 * - Template Method: Defines structure for action buttons

 * 

 * 

 * 

 * - Strategy Pattern: Subclasses implement specific action behaviors

 * 

 * 

 * 

 * - Builder Pattern: Fluent interface for chaining attributes

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

 * - Single Responsibility: Only handles action-specific button generation

 * 

 * 

 * 

 * - Open/Closed: Open for extension via subclasses, closed for modification

 * 

 * 

 * 

 * - Liskov Substitution: Can replace HtmlInputButton safely

 * 

 * 

 * 

 * - Interface Segregation: Implements HtmlElementInterface appropriately

 * 

 * 

 * 

 * - Dependency Inversion: Depends on HtmlElementInterface abstraction

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

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML

 * @author Kevin Fraser

 * @return void

 */
abstract class ActionButton extends HtmlInputGenericButton
{
    /**
     *
     * @var string The JavaScript function call for the onclick handler
     * @return void
     */
    protected $onclickFunction = '';

    /**

     *

     * @var string The action identifier (id, row id, etc.)

     * @return void

     */
    protected $actionId;

    /**

     *

     * @var string The action name (edit, delete, etc.)

     * @return void

     */
    protected $actionName;

    /**

     * Constructor

     *

     * @since 1.0.1 2026-02-16

     * @param mixed $actionName

     * @param HtmlElementInterface $label

     * @param mixed $actionId

     * @return void

     */
    public function __construct($actionName, HtmlElementInterface $label, $actionId = '')
    {
        parent::__construct($label);
        $this->actionName = $actionName;
        $this->actionId = $actionId;
        $this->setupActionButton();
    }

    /**

     * Setup button-specific attributes (onclick, name, class, etc.)

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

     * Implemented by subclasses for specific action behavior.

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

     * @since v1.0.5 2026-04-14

     * @return void

     */
    abstract protected function setupActionButton();

    /**

     * Get the action ID

     *

     * @since v1.0.5 2026-04-14

     * @return string

     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**

     * Get the action name

     *

     * @since v1.0.5 2026-04-14

     * @return string

     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**

     * Set CSS class for button styling

     *

     * @since v1.0.5 2026-04-14

     * @param mixed $cssClass

     * @return self Fluent interface

     */
    public function setCssClass($cssClass)
    {
        return $this->setClass($cssClass);
    }

    /**

     * Add a CSS class to existing classes

     *

     * @since v1.0.5 2026-04-14

     * @param string $class CSS class to add

     * @param bool $condition Optional condition (default: true)

     * @return \Ksfraser\HTML\HtmlElement

     */
    public function addCssClass(string $class, bool $condition = true): \Ksfraser\HTML\HtmlElement
    {
        return parent::addCSSClass($class, $condition);
    }
    /**
     * Set onclick function for the buttong $function JavaScript function to call (should return boolean)
     *
     * @since v2.0.1 2026-04-14
     * @param string $function
     * @return self
     */
    public function setOnclickFunction(string $function): self
    {
        $this->onclickFunction = $function;
        $this->setAttribute('onclick', $function);
        return $this;
    }


}

