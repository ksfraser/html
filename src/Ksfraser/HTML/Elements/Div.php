<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * Div - Factory/convenience wrapper for HTML div element

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

 * Provides fluent interface for building div containers.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Usage:

 * 

 * 

 * 

 * - (new Div())->addClass('container')->append($elem1, $elem2)->render()

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

 * @package Ksfraser\HTML\Elements

 * @return void

 */
class Div {
    private $element;
    private $classes = [];
    
    /**
    
     * Create a new div element
    
     *
    
     * @since 1.0.1 2026-02-16
    
     * @return void
    
     */
    public function __construct() {
        $this->element = new HtmlDiv(new HtmlString(''));
        $this->element->setTag('div');
    }
    
    /**
    
     * Get the underlying HtmlDiv element
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return HtmlDiv The wrapped HTML element
    
     */
    public function getHtmlElement(): HtmlDiv {
        return $this->element;
    }
    
    /**
    
     * Set the text content of the div
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $text The div text
    
     * @return self Fluent interface
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @param string $class CSS class name
    
     * @return self Fluent interface
    
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

     * @since v1.0.0 2026-04-13

     * @param string $id

     * @return self

     */
    public function setId(string $id): self {
        return $this->setAttribute('id', $id);
    }
    
    /**
    
     * Append child elements to the div
    
     *
    
     * @since v1.0.5 2026-04-14
    
     * @param mixed $elements
    
     * @return self Fluent interface
    
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
    
     * @since v1.0.5 2026-04-14
    
     * @param string $name
    
     * @param mixed $value
    
     * @return self Fluent interface
    
     */
public function setAttribute(string $name, $value): self {
		$this->element->setAttribute($name, $value);
        return $this;
    }
    
    /**
    
     * Get HTML representation as string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML div element
    
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
    
     * Render the div to HTML string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML div element
    
     */
    public function render(): string {
        return $this->getHtml();
    }
}

