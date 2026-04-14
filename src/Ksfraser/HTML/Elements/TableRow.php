<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;

/**
 * TableRow - Factory/convenience wrapper for HTML table row elements
 *
 * Provides fluent interface for building table rows.
 *
 * Usage:
 * - (new TableRow())->addClass('header')->append($td1, $td2)->render()
 *
 *
 * @package Ksfraser\HTML\Elements
 * @since 1.0.5 2026-02-22
 */
class TableRow implements \Ksfraser\HTML\HtmlElementInterface {
    private $element;
    private $classes = [];
    
    /**
     * Create a new table row
 * @return void
 * @since 1.0.1 2026-02-16
     */
    public function __construct() {
        $this->element = new HtmlTableRow(new HtmlString(''));
        $this->element->setTag('tr');
    }
    
    /**
     * Get the underlying HtmlTableRow element
     * 
     * @return HtmlTableRow The wrapped HTML element
 * @since v1.0.0 2026-04-13
     */
    public function getHtmlElement(): HtmlTableRow {
        return $this->element;
    }
    
    /**
     * Add a CSS class to the row
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
     * Add headers from an array of labels
     * 
     * Creates TableHeader elements from an array of label strings.
     * Useful for building header rows with a simple array of column names.
     * 
     * @param array $labels Array of header label strings
     * @return self Fluent interface
 * @since v1.0.0 2026-04-13
     */
    public function addHeadersFromArray(array $labels): self {
        foreach ($labels as $label) {
            $header = new TableHeader();
            $header->setText($label);
            $this->append($header);
        }
        return $this;
    }
    
    /**
     * Append child elements (cells) to the row
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
     * @return string The complete HTML table row element
 * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Render the row to HTML string
     * 
     * @return string The complete HTML table row element
 * @since v1.0.0 2026-04-13
     */
    public function render(): string {
        return $this->getHtml();
    }
    
    /**
     * Satisfy HtmlElementInterface: echo HTML string
 * @return void
 * @since v1.0.0 2026-04-13
     */
    public function toHtml(): void {
        echo $this->getHtml();
    }
}

