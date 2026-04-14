<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**
 * TableHeader - Factory/convenience wrapper for HTML table header cell element
 *
 * Provides fluent interface for building table header cells (th).
 *
 * Usage:
 * - (new TableHeader())->setText('Column Name')->render()
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since 1.0.1 2026-02-16
 */
class TableHeader {
    private $element;
    private $classes = [];
    
    /**
     * Create a new table header cell (th)
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function __construct() {
        $this->element = new HtmlTableHeaderCell(new HtmlString(''));
        $this->element->setTag('th');
    }
    
    /**
     * Get the underlying HtmlTableHeaderCell element
     * 
     * @return HtmlTableHeaderCell The wrapped HTML element
 * @since v1.0.0 2026-04-13
     */
    public function getHtmlElement(): HtmlTableHeaderCell {
        return $this->element;
    }
    
    /**
     * Set the text content of the header cell
     * 
     * @param string $text The header text
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function setText(string $text): self {
        // Replace the first nested element with new text
        $this->element = new HtmlTableHeaderCell(new HtmlString(htmlspecialchars($text)));
        $this->element->setTag('th');
        
        // Re-apply classes
        if (!empty($this->classes)) {
            $this->element->addAttribute('class', implode(' ', $this->classes));
        }
        
        return $this;
    }
    
    /**
     * Add a CSS class to the header cell
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
            $this->element->addAttribute('class', implode(' ', $this->classes));
        }
        return $this;
    }
    
    /**
     * Append child elements to the header cell
     * 
     * @return self Fluent interface
 * @param mixed $elements
 * @since v1.0.5 2026-04-14
 */
public function append(...$elements): self {
        foreach ($elements as $element) {
            if ($element instanceof HtmlElementInterface) {
                $this->element->addNested($element);
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
        $this->element->addAttribute($name, $value);
        return $this;
    }
    
    /**
     * Get HTML representation as string
     * 
     * @return string The complete HTML table header cell element
 * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Render the header cell to HTML string
     * 
     * @return string The complete HTML table header cell element
 * @since v1.0.0 2026-04-13
     */
    public function render(): string {
        return $this->getHtml();
    }
}

