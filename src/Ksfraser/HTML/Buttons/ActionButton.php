<?php

namespace Ksfraser\HTML\Buttons;

use Ksfraser\HTML\Elements\HtmlInputGenericButton;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * Abstract Action Button Class
 *
 * Base class for specialized action buttons (Edit, Delete, Add, Cancel).
 * Follows Single Responsibility Principle by encapsulating button-specific logic
 * for common CRUD operations.
 *
 * Design Patterns:
 * - Template Method: Defines structure for action buttons
 * - Strategy Pattern: Subclasses implement specific action behaviors
 * - Builder Pattern: Fluent interface for chaining attributes
 *
 * SOLID Principles:
 * - Single Responsibility: Only handles action-specific button generation
 * - Open/Closed: Open for extension via subclasses, closed for modification
 * - Liskov Substitution: Can replace HtmlInputButton safely
 * - Interface Segregation: Implements HtmlElementInterface appropriately
 * - Dependency Inversion: Depends on HtmlElementInterface abstraction
 *
 *
 *
 * @package Ksfraser\HTML
 * @author Kevin Fraser
 * @since 1.0.1 2026-02-16
 */
abstract class ActionButton extends HtmlInputGenericButton
{
    /**
     * @var string The JavaScript function call for the onclick handler
     */
    protected $onclickFunction = '';

    /**
     * @var string The action identifier (id, row id, etc.)
     */
    protected $actionId;

    /**
     * @var string The action name (edit, delete, etc.)
     */
    protected $actionName;

    /**
     * Constructor
     * 
 * @param mixed $actionName
 * @param HtmlElementInterface $label
 * @param mixed $actionId
 * @return void
 * @since 1.0.1 2026-02-16
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
     * Implemented by subclasses for specific action behavior.
     * 
     * @return void
 * @since v1.0.5 2026-04-14
     */
    abstract protected function setupActionButton();

    /**
     * Get the action ID
     * 
     * @return string
 * @since v1.0.5 2026-04-14
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Get the action name
     * 
     * @return string
 * @since v1.0.5 2026-04-14
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Set CSS class for button styling
     *
     * @param mixed $cssClass
     * @return self Fluent interface
 * @since v1.0.5 2026-04-14
     */
    public function setCssClass($cssClass)
    {
        return $this->setClass($cssClass);
    }

    /**
     * Add a CSS class to existing classes
     *
     * @param string $class CSS class to add
     * @param bool $condition Optional condition (default: true)
     * @return \Ksfraser\HTML\HtmlElement
 * @since v1.0.5 2026-04-14
     */
    public function addCssClass(string $class, bool $condition = true): \Ksfraser\HTML\HtmlElement
    {
        return parent::addCSSClass($class, $condition);
    }
    /**
     * Set onclick function for the buttong $function JavaScript function to call (should return boolean)
     * @return self
 * @param string $function
 * @since v2.0.1 2026-04-14
     */
    public function setOnclickFunction(string $function): self
    {
        $this->onclickFunction = $function;
        $this->setAttribute('onclick', $function);
        return $this;
    }


}

