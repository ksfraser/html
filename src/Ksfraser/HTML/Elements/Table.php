<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**
 * Table - Factory/convenience wrapper for HTML table elements
 *
 * Provides fluent interface for building tables with clean API.
 * Wraps HtmlTable with methods like addClass(), append(), etc.
 *
 * Usage:
 * - (new Table())->addClass('my-table')->append($row1, $row2)->render()
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since 1.0.1 2026-02-16
 */
class Table {
    private $element;
    private $classes = [];
    
    /**
     * Create a new table
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function __construct() {
        $this->element = new HtmlTable(new HtmlString(''));
        $this->element->setTag('table');
    }
    
    /**
     * Get the underlying HtmlTable element
     * 
     * @return HtmlTable The wrapped HTML element
 * @since v1.0.0 2026-04-13
     */
    public function getHtmlElement(): HtmlTable {
        return $this->element;
    }
    
    /**
     * Add a CSS class to the table
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
     * Append child elements (rows) to the table
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
     * @return string The complete HTML table element
 * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Render the table to HTML string
     * 
     * @return string The complete HTML table element
 * @since v1.0.0 2026-04-13
     */
    public function render(): string {
        return $this->getHtml();
    }
}


