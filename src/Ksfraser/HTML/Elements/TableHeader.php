<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**

 * TableHeader - Factory/convenience wrapper for HTML table header cell element

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

 * Provides fluent interface for building table header cells (th).

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

 * - (new TableHeader())->setText('Column Name')->render()

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
class TableHeader {
    private $element;
    private $classes = [];
    
    /**
    
     * Create a new table header cell (th)
    
     *
    
     * @since 1.0.1 2026-02-16
    
     * @return void
    
     */
    public function __construct() {
        $this->element = new HtmlTableHeaderCell(new HtmlString(''));
        $this->element->setTag('th');
    }
    
    /**
    
     * Get the underlying HtmlTableHeaderCell element
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return HtmlTableHeaderCell The wrapped HTML element
    
     */
    public function getHtmlElement(): HtmlTableHeaderCell {
        return $this->element;
    }
    
    /**
    
     * Set the text content of the header cell
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $text The header text
    
     * @return self Fluent interface
    
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
    
     * @since v1.0.0 2026-04-13
    
     * @param string $class CSS class name
    
     * @return self Fluent interface
    
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
    
     * @since v1.0.5 2026-04-14
    
     * @param mixed $elements
    
     * @return self Fluent interface
    
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
    
     * @since v1.0.5 2026-04-14
    
     * @param string $name
    
     * @param mixed $value
    
     * @return self Fluent interface
    
     */
public function setAttribute(string $name, $value): self {
        $this->element->addAttribute($name, $value);
        return $this;
    }
    
    /**
    
     * Get HTML representation as string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML table header cell element
    
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
    
     * Render the header cell to HTML string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML table header cell element
    
     */
    public function render(): string {
        return $this->getHtml();
    }
}

