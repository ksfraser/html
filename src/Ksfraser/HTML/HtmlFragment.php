<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * HTML Fragment - Container for Multiple Elements Without Wrapper Tag

 *

 * 

 * Represents a collection of HTML elements that should be rendered together

 * but without wrapping them in a parent tag (like <div> or <span>).

 * 

 * This is useful for:

 * - Multiple hidden input fields that need to be grouped logically

 * - Returning multiple elements from a method without echo

 * - Building complex HTML structures compositionally

 * 

 * Example:

 * ```php

 * $fragment = new HtmlFragment();

 * $fragment->addChild(new HtmlHidden('id', '123'));

 * $fragment->addChild(new HtmlHidden('type', 'SP'));

 * return $fragment->getHtml(); // <input type="hidden"...><input type="hidden"...>

 * ```

 * 

 * Benefits:

 * - Composite Pattern: Treats multiple elements as single unit

 * - No echo: Returns string for composition or testing

 * - Type-safe: Implements HtmlElementInterface

 * - Recursive: Children can be fragments too

 * 

 * 

 *

 * @since v1.0.0 2025-10-31

 * @package Ksfraser\HTML

 * @author Kevin Fraser / GitHub Copilot

 * @see HtmlElementInterface

 */
class HtmlFragment implements HtmlElementInterface
{
    /**
     *
     * @var HtmlElementInterface[] Array of child elements
     */
    private $children = [];
    
    /**
    
     * Constructor - optionally accepts initial children
    
     *
    
     * @since v1.0.0 2025-10-31
    
     * @param array $children
    
     * @return void
    
     */
    public function __construct(array $children = [])
    {
        foreach ($children as $child) {
            $this->addChild($child);
        }
    }
    
    /**
    
     * Add a child element to this fragment
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param HtmlElementInterface $child Element to add
    
     * @return self For fluent interface
    
     */
    public function addChild(HtmlElementInterface $child): self
    {
        $this->children[] = $child;
        return $this;
    }
    
    /**
    
     * Get HTML representation as string
    
     *
    
     * 
    
     * Concatenates all children's HTML without wrapping tag.
    
     * This is the key difference from HtmlElement - no wrapper.
    
     * 
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string HTML string of all children concatenated
    
     */
    public function getHtml(): string
    {
        $html = '';
        foreach ($this->children as $child) {
            $html .= $child->getHtml();
        }
        return $html;
    }
    
    /**
    
     * Render HTML to output
    
     *
    
     * 
    
     * Echoes the HTML representation. Use this for immediate output,
    
     * or use getHtml() for composition/testing.
    
     * 
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return void
    
     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }
    
    /**
    
     * Get number of children in this fragment
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return int Number of child elements
    
     */
    public function getChildCount(): int
    {
        return count($this->children);
    }
    
    /**
    
     * Check if fragment is empty
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return bool True if no children, false otherwise
    
     */
    public function isEmpty(): bool
    {
        return empty($this->children);
    }
}
