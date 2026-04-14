<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**
 * TableData - Factory/convenience wrapper for HTML table data cell element
 *
 * Provides fluent interface for building table cells (td).
 *
 * Usage:
 * - (new TableData())->addClass('col1')->setText('Value')->render()
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since 1.0.1 2026-02-16
 */
class TableData {
    private $element;
    private $classes = [];
    
    /**
     * Create a new table data cell (td)
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function __construct() {
        $this->element = new HtmlTableRowCell(new HtmlString(''));
        $this->element->setTag('td');
    }
    
    /**
     * Get the underlying HtmlTableRowCell element
     * 
     * @return HtmlTableRowCell The wrapped HTML element
 * @since v1.0.0 2026-04-13
     */
    public function getHtmlElement(): HtmlTableRowCell {
        return $this->element;
    }
    
    /**
     * Set the text content of the cell
     * 
     * @param string $text The cell text
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function setText(string $text): self {
        // Replace the first nested element with new text
        $this->element = new HtmlTableRowCell(new HtmlString(htmlspecialchars($text)));
        $this->element->setTag('td');
        
        // Re-apply classes
        if (!empty($this->classes)) {
            $this->element->addAttributeObject(new HtmlAttribute('class', implode(' ', $this->classes)));
        }
        
        return $this;
    }
    
    /**
     * Add a CSS class to the cell
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
            $this->element->addAttributeObject(new HtmlAttribute('class', implode(' ', $this->classes)));
        }
        return $this;
    }
    
    /**
     * Append child elements to the cell
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
        $this->element->addAttributeObject(new HtmlAttribute($name, $value));
        return $this;
    }
    
    /**
     * Get HTML representation as string
     * 
     * @return string The complete HTML table cell element
 * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Render the cell to HTML string
     * 
     * @return string The complete HTML table cell element
 * @since v1.0.0 2026-04-13
     */
    public function render(): string {
        return $this->getHtml();
    }
}

