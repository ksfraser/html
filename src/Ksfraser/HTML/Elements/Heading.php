<?php
namespace Ksfraser\HTML\Elements;

/**
 * Heading - Factory class for HTML heading elements
 * 
 * Provides a convenient way to create heading elements at any level.
 * Usage: (new Heading(3))->setText('Title');
 * 
 * @package Ksfraser\HTML\Elements
 */
class Heading {
    private mixed $element;
    
    /**
     * Create a heading element at the specified level
     * 
     * @param int $level Heading level (1-6, default: 2)
     */
    public function __construct(int $level = 2) {
        $level = max(1, min(6, $level));
        
        $className = 'Ksfraser\HTML\Elements\HtmlHeading' . $level;
        // Create with empty HtmlString initially, content can be set with setText()
        $this->element = new $className(new HtmlString(''));
    }
    
    /**
     * Proxy method calls to the underlying heading element
     * 
     * @param string $method Method name
     * @param array $args Method arguments
     * @return mixed
     */
    public function __call(string $method, array $args): mixed {
        return $this->element->$method(...$args);
    }
    
    /**
     * Render the heading element to HTML
     * 
     * @return string HTML representation
     */
    public function render(): string {
        return $this->element->getHtml();
    }
    
    /**
     * Get HTML representation as string
     * 
     * @return string HTML representation
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
}
