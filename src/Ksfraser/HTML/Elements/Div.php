<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * Div - Factory/convenience wrapper for HTML div element
 *
 * Provides fluent interface for building div containers.
 *
 * Usage:
 * - (new Div())->addClass('container')->append($elem1, $elem2)->render()
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since 1.0.1 2026-02-16
 */
class Div {
    private $element;
    private $classes = [];
    
    /**
     * Create a new div element
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function __construct() {
        $this->element = new HtmlDiv(new HtmlString(''));
        $this->element->setTag('div');
    }
    
    /**
     * Get the underlying HtmlDiv element
     * 
     * @return HtmlDiv The wrapped HTML element
 * @since v1.0.0 2026-04-13
     */
    public function getHtmlElement(): HtmlDiv {
        return $this->element;
    }
    
    /**
     * Set the text content of the div
     * 
     * @param string $text The div text
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function setText(string $text): self {
        // Replace nested element with new text
        $this->element = new HtmlDiv(new HtmlString(htmlspecialchars($text)));
        $this->element->setTag('div');
        
        // Re-apply classes
        if (!empty($this->classes)) {
			$this->element->setAttribute('class', implode(' ', $this->classes));
        }
        
        return $this;
    }
    
    /**
     * Add a CSS class to the div
     * 
     * @param string $class CSS class name
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function addClass(string $class): self {
        if (!in_array($class, $this->classes)) {
            $this->classes[] = $class;
        }
        if (!empty($this->classes)) {
            $this->element->setAttribute('class', implode(' ', $this->classes));
        }
        return $this;
    }

    /**
     * Set the id attribute
     *
     * @param string $id
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function setId(string $id): self {
        return $this->setAttribute('id', $id);
    }
    
    /**
     * Append child elements to the div
     * 
     * @return self Fluent interface
 * @param mixed $elements
 * @since v1.0.5 2026-04-14
 */
public function append(...$elements): self {
        foreach ($elements as $element) {
            if ($element instanceof HtmlElementInterface) {
                $this->element->addNested($element);
            } elseif (method_exists($element, 'getHtmlElement')) {
                $this->element->addNested($element->getHtmlElement());
            }
        }
        return $this;
    }
    
    /**
     * Add an HTML attribute
     * 
     * @return self Fluent interface
 * @param string $name
 * @param mixed $value
 * @since v1.0.5 2026-04-14
 */
public function setAttribute(string $name, $value): self {
		$this->element->setAttribute($name, $value);
        return $this;
    }
    
    /**
     * Get HTML representation as string
     * 
     * @return string The complete HTML div element
 * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Render the div to HTML string
     * 
     * @return string The complete HTML div element
 * @since v1.0.0 2026-04-13
     */
    public function render(): string {
        return $this->getHtml();
    }
}

