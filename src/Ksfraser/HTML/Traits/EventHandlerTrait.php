<?php
/**
 * EventHandlerTrait - Event Handler Methods
 * 
 * Provides convenient methods for JavaScript event handling.
 * Features: onClick, onChange, onSubmit, and 15+ standard HTML5 events
 * 
 * Implements FR-007: Event Handler Methods
 * 
 * Pattern: Observer Pattern with EventHandler class
 * 
 * @author Kevin Fraser
 * @since 2026-03-27
 */

namespace Ksfraser\HTML\Traits;

/**
 * Trait for managing JavaScript event handlers
 * 
 * Provides convenience methods for common HTML5 events.
 * Methods return $this for chaining.
 * 
 * Methods:
 * - onClick(string) - onclick event
 * - onChange(string) - onchange event
 * - onSubmit(string) - onsubmit event
 * - onFocus(string) - onfocus event
 * - onBlur(string) - onblur event
 * - onKeyPress(string) - onkeypress event
 * - onKeyDown(string) - onkeydown event
 * - onKeyUp(string) - onkeyup event
 * - onMouseEnter(string) - onmouseenter event
 * - onMouseLeave(string) - onmouseleave event
 * - onMouseOver(string) - onmouseover event
 * - onMouseOut(string) - onmouseout event
 * - onDoubleClick(string) - ondblclick event
 * - onLoad(string) - onload event
 * - onError(string) - onerror event
 * - onInput(string) - oninput event
 * - onScroll(string) - onscroll event
 * - onWheel(string) - onwheel event
 * 
 * @package Ksfraser\HTML\Traits
 */
trait EventHandlerTrait
{
    /**
     * Array of event handlers keyed by event name
     * @var array<string, EventHandler>
     */
    protected $eventHandlers = [];

    /**
     * Add click event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     * 
     * @example
     * $button->onClick("alert('clicked')");
     * $button->onClick("handleClick(event)");
     */
    public function onClick(string $code): self
    {
        return $this->addEventHandler('onclick', $code);
    }

    /**
     * Add change event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onChange(string $code): self
    {
        return $this->addEventHandler('onchange', $code);
    }

    /**
     * Add submit event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onSubmit(string $code): self
    {
        return $this->addEventHandler('onsubmit', $code);
    }

    /**
     * Add focus event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onFocus(string $code): self
    {
        return $this->addEventHandler('onfocus', $code);
    }

    /**
     * Add blur event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onBlur(string $code): self
    {
        return $this->addEventHandler('onblur', $code);
    }

    /**
     * Add key press event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onKeyPress(string $code): self
    {
        return $this->addEventHandler('onkeypress', $code);
    }

    /**
     * Add key down event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onKeyDown(string $code): self
    {
        return $this->addEventHandler('onkeydown', $code);
    }

    /**
     * Add key up event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onKeyUp(string $code): self
    {
        return $this->addEventHandler('onkeyup', $code);
    }

    /**
     * Add mouse enter event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onMouseEnter(string $code): self
    {
        return $this->addEventHandler('onmouseenter', $code);
    }

    /**
     * Add mouse leave event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onMouseLeave(string $code): self
    {
        return $this->addEventHandler('onmouseleave', $code);
    }

    /**
     * Add mouse over event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onMouseOver(string $code): self
    {
        return $this->addEventHandler('onmouseover', $code);
    }

    /**
     * Add mouse out event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onMouseOut(string $code): self
    {
        return $this->addEventHandler('onmouseout', $code);
    }

    /**
     * Add double click event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onDoubleClick(string $code): self
    {
        return $this->addEventHandler('ondblclick', $code);
    }

    /**
     * Add load event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onLoad(string $code): self
    {
        return $this->addEventHandler('onload', $code);
    }

    /**
     * Add error event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onError(string $code): self
    {
        return $this->addEventHandler('onerror', $code);
    }

    /**
     * Add input event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onInput(string $code): self
    {
        return $this->addEventHandler('oninput', $code);
    }

    /**
     * Add scroll event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onScroll(string $code): self
    {
        return $this->addEventHandler('onscroll', $code);
    }

    /**
     * Add wheel event handler
     * 
     * @param string $code JavaScript code to execute
     * @return self
     */
    public function onWheel(string $code): self
    {
        return $this->addEventHandler('onwheel', $code);
    }

    /**
     * Add a generic event handler
     * 
     * Internal method to handle all event registration.
     * Replaces existing handler for same event (not append).
     * 
     * @param string $event Event name (e.g., 'onclick', 'onchange')
     * @param string $code JavaScript code to execute
     * @return self
     * @access protected
     */
    protected function addEventHandler(string $event, string $code): self
    {
        // Skip if code is empty or whitespace-only
        if (empty(trim($code))) {
            // Remove handler if exists
            if (isset($this->eventHandlers[$event])) {
                unset($this->eventHandlers[$event]);
            }
            return $this;
        }

        // Create and store event handler (replaces existing)
        $this->eventHandlers[$event] = new EventHandler($event, $code);

        return $this;
    }

    /**
     * Render all event handlers as HTML attributes
     * 
     * Internal method to generate HTML representation of all 
     * registered event handlers. Called during HTML rendering.
     * 
     * @return string HTML-formatted event attributes
     * @access protected
     */
    protected function renderEventHandlers(): string
    {
        if (empty($this->eventHandlers)) {
            return '';
        }

        $html = ' ';
        foreach ($this->eventHandlers as $handler) {
            $html .= $handler->getHtml() . ' ';
        }

        return $html;
    }

    /**
     * Get a specific event handler
     * 
     * @param string $event Event name (e.g., 'onclick')
     * @return EventHandler|null The event handler or null if not set
     * @access protected
     */
    protected function getEventHandler(string $event): ?EventHandler
    {
        return $this->eventHandlers[$event] ?? null;
    }

    /**
     * Check if an event handler is registered
     * 
     * @param string $event Event name (e.g., 'onclick')
     * @return bool True if handler registered, false otherwise
     * @access protected
     */
    protected function hasEventHandler(string $event): bool
    {
        return isset($this->eventHandlers[$event]);
    }

    /**
     * Remove a specific event handler
     * 
     * @param string $event Event name (e.g., 'onclick')
     * @return self
     * @access protected
     */
    protected function removeEventHandler(string $event): self
    {
        if (isset($this->eventHandlers[$event])) {
            unset($this->eventHandlers[$event]);
        }
        return $this;
    }

    /**
     * Clear all event handlers
     * 
     * @return self
     * @access protected
     */
    protected function clearEventHandlers(): self
    {
        $this->eventHandlers = [];
        return $this;
    }

    /**
     * Get all event handlers
     * 
     * @return array<string, EventHandler> All registered handlers
     * @access protected
     */
    protected function getEventHandlers(): array
    {
        return $this->eventHandlers;
    }
}

/**
 * EventHandler Class
 * 
 * Represents a single JavaScript event handler.
 * Handles proper HTML escaping and attribute rendering.
 * 
 * @package Ksfraser\HTML\Traits
 */
class EventHandler
{
    /**
     * Event name (e.g., 'onclick', 'onchange')
     * @var string
     */
    private $event;

    /**
     * JavaScript code to execute
     * @var string
     */
    private $code;

    /**
     * Constructor
     * 
     * @param string $event HTML event name (e.g., 'onclick')
     * @param string $code JavaScript code
     */
    public function __construct(string $event, string $code)
    {
        $this->event = $event;
        $this->code = $code;
    }

    /**
     * Get HTML representation of this event handler
     * 
     * Renders as HTML attribute with proper escaping.
     * Example: onclick="handleClick(event)"
     * 
     * @return string HTML attribute string
     */
    public function getHtml(): string
    {
        // Escape the JavaScript code for safe HTML embedding
        $escaped = htmlspecialchars($this->code, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        return "{$this->event}=\"{$escaped}\"";
    }

    /**
     * Get the event name
     * 
     * @return string Event name
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Get the JavaScript code
     * 
     * @return string JavaScript code
     */
    public function getCode(): string
    {
        return $this->code;
    }
}
