<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Traits\CSSManagementTrait;
use Ksfraser\HTML\Traits\EventHandlerTrait;
use Ksfraser\HTML\Traits\DataAttributeTrait;
use Ksfraser\HTML\Traits\AriaAttributeTrait;
use Ksfraser\HTML\Traits\ElementIntrospectionTrait;
use Ksfraser\HTML\Traits\FormElementsTrait;
use Ksfraser\HTML\Traits\ComponentFactoryTrait;
use Ksfraser\HTML\Traits\ResponsiveLayoutTrait;
use Ksfraser\HTML\Traits\SemanticElementsTrait;

require_once( 'HtmlAttributeList.php' );

/**
 * HTML Element Class
 * 
 * An HTML element is defined by a start tag, some content, and an end tag.
 * Elements can have nested elements and attributes.
 * 
 * Follows Single Responsibility Principle: Renders HTML elements
 * Uses CSSManagementTrait for enhanced CSS class management (FR-006)
 * Uses EventHandlerTrait for event handler methods (FR-007)
 * 
 * @link https://www.w3schools.com/html/html_elements.asp
 * @author Kevin Fraser
 * @since 20250119
 * @version 20250119
 */
class HtmlElement implements HtmlElementInterface {
    use CSSManagementTrait;
    use EventHandlerTrait;
    use DataAttributeTrait;
    use AriaAttributeTrait;
    use ElementIntrospectionTrait;
    use FormElementsTrait;
    use ComponentFactoryTrait;
    use ResponsiveLayoutTrait;
    use SemanticElementsTrait;
    /**
     * Allow casting to string to return HTML output
     */
    public function __toString(): string {
        return $this->getHtml();
    }
                /**
                 * Get the tag name
                 * @return string|null
                 */
                public function getTag(): ?string {
                    return $this->tag ?? null;
                }
            protected function initAttributeList(): void {
                $this->attributeList = new \Ksfraser\HTML\HtmlAttributeList();
            }

            /**
             * Add an HTML attribute object (HtmlAttribute or subclass)
             * @param HtmlAttribute $attribute
             * @return self
             */
            public function addAttributeObject(HtmlAttribute $attribute): self {
                if (!isset($this->attributeList)) {
                    $this->initAttributeList();
                }
                $this->attributeList->addAttributeObject($attribute);
                return $this;
            }

            /**
             * Add an HTML attribute by name and value (wraps setAttribute)
             * @param string $name
             * @param string|HtmlElementInterface $value
             * @return self
             */
            public function addAttribute($name, $value): self {
                return $this->setAttribute($name, $value);
            }

            /**
             * Convenience setter for an attribute by name/value.
             * Accepts string or HtmlElementInterface for value.
             * Converts string to HtmlString for storage.
             * @param string $name
             * @param string|HtmlElementInterface $value
             * @return self
             */
            public function setAttribute(string $name, $value): self {
                if (!$value instanceof HtmlString) {
                    $value = new HtmlString($value);
                }
                $attr = new HtmlAttribute($name, $value);
                if (method_exists($this->attributeList, 'setAttribute')) {
                    $this->attributeList->setAttribute($attr);
                } else {
                    $this->addAttributeObject($attr);
                }
                return $this;
            }
        /**
         * Deprecated: Use addCSSClass instead.
         * Backward compatibility: addClass wraps addCSSClass
         * @param string $class
         * @return self
         */
        public function addClass(string $class): self
        {
            // Deprecated: Use addCSSClass()
            return $this->addCSSClass($class);
        }
    /** @var string HTML tag name */
    protected $tag;
    
    /** @var HtmlElementInterface[] Array of nested child elements */
    protected $nested;
    
    /** @var bool Whether this is an empty element (no closing tag) */
    protected $empty;
    
    /** @var string|null Optional text content (for elements created with tag + text) */
    protected $content;
    
    /** @var HtmlAttributeList List of HTML attributes */
    protected $attributeList;
    
    /**
     * Constructor
     *
     * @param string|HtmlElementInterface|null $tagOrData Optional tag name or initial nested element
     * @param string|null $content Optional text content (only used with tag parameter)
     */
    public function __construct($tagOrData = null, ?string $content = null)
    {
        $this->nested = array();
        $this->content = null;  // Initialize content property
        $this->tag = null;      // Initialize tag property
        
        // Handle tag string parameter
        if (is_string($tagOrData)) {
            $this->setTag($tagOrData);
            // If content provided with tag, add as text
            if ($content !== null && $content !== '') {
                $this->content = $content;
            }
        } // Handle HtmlElementInterface parameter
        else if ($tagOrData !== null && $tagOrData instanceof HtmlElementInterface) {
            $this->addNested($tagOrData);
        }
        // else: null passed or nothing - that's fine
        
        $this->newAttributeList();
        $this->empty = false;
    }

    /**
     * Initialize a new attribute list
     * 
     * @return void
     */
    function newAttributeList(): void
    {
        $this->attributeList = new HtmlAttributeList();
    }
    
    /**
     * Add a nested child element
     * 
     * @param HtmlElementInterface $element Element to nest
     * @return self (Fluent interface)
     */
    function addNested(HtmlElementInterface $element): self
    {
        $this->nested[] = $element;
	return $this;
    }
    

    /**
     * Get the current value of an attribute (if present)
     *
     * @param string $name
     * @return string|null
     */
    public function getAttributeValue(string $name): ?string
    {
        if (method_exists($this->attributeList, 'getAttributeValue')) {
            return $this->attributeList->getAttributeValue($name);
        }
        return null;
    }

    /**
     * Remove an attribute from the element
     *
     * @param string $name Attribute name to remove
     * @return self (Fluent interface)
     */
    public function removeAttribute(string $name): self
    {
        if (method_exists($this->attributeList, 'removeAttribute')) {
            $this->attributeList->removeAttribute($name);
        }
        return $this;
    }

    /**
     * Set the entire attribute list
     * 
     * @param HtmlAttributeList $list New attribute list
     * @return self (Fluent interface)
     */
    function setAttributeList(HtmlAttributeList $list): self
    {
        $this->attributeList = $list;
	    return $this;
    }
    
    /**
     * Set the HTML tag name
     * 
     * @param string $tag Tag name (lowercase for XHTML compliance)
     * @return self (Fluent interface)
     */
    function setTag(string $tag): self
    {
        $this->tag = strtolower($tag); // XHTML requires lowercase
	    return $this;
    }

    /**
     * Renders HTML for all nested children and text content
     * 
     * @return string HTML string of all nested children
     */
    protected function renderChildrenHtml(): string
    {
        $html = '';
        
        // Add text content first if present
        if (!empty($this->content)) {
            $html .= htmlspecialchars($this->content, ENT_QUOTES, 'UTF-8');
        }
        
        // Then add nested element children
        foreach ($this->nested as $child) {
            $html .= $child->getHtml();
        }
        return $html;
    }

    /**
     * Renders the object in HTML.
     * The HTML is echoed directly into the output.
     * 
     * @return void
     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }
    
    /**
     * Get HTML representation as string
     * 
     * @return string Complete HTML element string
     */
    public function getHtml(): string
    {
        $html = '<' . $this->tag;
        $html .= $this->getAttributes();

        if ($this->empty) {
            $html .= ' />';
        } else {
            $html .= '>';
            $html .= $this->renderChildrenHtml();
            $html .= '</' . $this->tag . '>';
        }

        return $html;
    }

    /**
     * Returns the opening tag and all child content (without the closing tag).
     * Useful for wrapping template blocks between open/close calls.
     *
     * @return string Opening tag + children HTML
     */
    public function openTag(): string
    {
        $html = '<' . $this->tag;
        $html .= $this->getAttributes();
        if ($this->empty) {
            $html .= ' />';
            return $html;
        }
        $html .= '>';
        $html .= $this->renderChildrenHtml();
        return $html;
    }

    /**
     * Returns the closing tag for this element.
     * For void/empty elements, returns an empty string.
     *
     * @return string Closing tag or empty string
     */
    public function closeTag(): string
    {
        if ($this->empty) {
            return '';
        }
        return '</' . $this->tag . '>';
    }
    
    /**
     * Get HTML attributes as string
     * 
     * Includes both regular attributes and event handlers
     * 
     * @return string Formatted attribute string
     */
    protected function getAttributes(): string
    {
        $html = " ";
        $html .= $this->attributeList->getHtml();
        $html .= $this->renderEventHandlers();
        $html .= $this->renderDataAttributes();
        $html .= $this->renderAriaAttributes();
        return rtrim($html);
    }
}
