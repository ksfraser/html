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

 * An HTML element is defined by a start tag, some content, and an end tag.

 * 

 * 

 * 

 * Elements can have nested elements and attributes.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Follows Single Responsibility Principle: Renders HTML elements

 * 

 * 

 * 

 * Uses CSSManagementTrait for enhanced CSS class management (FR-006)

 * 

 * 

 * 

 * Uses EventHandlerTrait for event handler methods (FR-007)

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

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @link https://www.w3schools.com/html/html_elements.asp

 * @author Kevin Fraser

 * @version 20250119

 * @return void

 */
/**
 * HtmlElement
 *
 * @since v1.0.0 2026-04-14
 * @return void
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
     *
     * @since 1.0.4 2026-02-21
     * @return string
     */
    public /**
 * __toString
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function __toString(): string {
        return $this->getHtml();
    }
    /**
     * Get the tag name
     *
     * @since v1.0.5 2026-04-14
     * @return ?string
     */
    public /**
 * getTag
 *
 * @since v1.0.0 2026-04-14
 * @return ?string
 */
function getTag(): ?string {
        return $this->tag ?? null;
    }

    /**

     * initAttributeList

     *

     * @since 1.0.4 2026-02-21

     * @return void

     */
    protected /**
 * initAttributeList
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function initAttributeList(): void {
        $this->attributeList = new \Ksfraser\HTML\HtmlAttributeList();
    }

    /**

     * Add an HTML attribute object (HtmlAttribute or subclass)

     *

     * @since v1.0.0 2026-04-13

     * @param HtmlAttribute $attribute

     * @return self

     */
    public /**
 * addAttributeObject
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attribute
 * @return self
 */
function addAttributeObject(HtmlAttribute $attribute): self {
        if (!isset($this->attributeList)) {
            $this->initAttributeList();
        }
        $this->attributeList->addAttributeObject($attribute);
        return $this;
    }

    /**

     * Add an HTML attribute by name and value (wraps setAttribute)

     *

     * @since v1.0.5 2026-04-14

     * @param mixed $name

     * @param mixed $value

     * @return self

     */
    public /**
 * addAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
function addAttribute($name, $value): self {
        return $this->setAttribute($name, $value);
    }

    /**

     * Convenience setter for an attribute by name/value.

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

     * Accepts string or HtmlElementInterface for value.

     * 

     * 

     * 

     * Converts string to HtmlString for storage.

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

     *

     * @since v1.0.0 2026-04-13

     * @param string $name

     * @param mixed $value

     * @return self

     */
    public /**
 * setAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $value
 * @return self
 */
function setAttribute(string $name, $value): self {
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
         *
         * 
         * 
         * Backward compatibility: addClass wraps addCSSClass
         * 
         * 
         *
         * @since v1.0.0 2026-04-13
         * @param string $class
         * @return self
         */
        public /**
 * addClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
function addClass(string $class): self
        {
            // Deprecated: Use addCSSClass()
            return $this->addCSSClass($class);
        }
    /**
     *
     * @return void
     */
    protected $tag;
    
    /**
    
     *
    
     * @return void
    
     */
    protected $nested;
    
    /**
    
     *
    
     * @return void
    
     */
    protected $empty;
    
    /**
    
     *
    
     * @return void
    
     */
    protected $content;
    
    /**
    
     *
    
     * @return void
    
     */
    protected $attributeList;
    
    /**
    
     * Constructor
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string|HtmlElementInterface|null $tagOrData Optional tag name or initial nested element
    
     * @param string|HtmlElementInterface|null $content Optional text content or element (only used with tag parameter)
    
     * @return void
    
     */
    public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $tagOrData
 * @param mixed $content
 * @return void
 */
function __construct(string|HtmlElementInterface|null $tagOrData = null, string|HtmlElementInterface|null $content = null)
    {
        $this->nested = array();
        $this->content = null;  // Initialize content property
        $this->tag = null;      // Initialize tag property
        
        // Handle tag string parameter
        if (is_string($tagOrData)) {
            $this->setTag($tagOrData);
            // If content provided with tag, add as text or nested element
            if ($content !== null && $content !== '') {
                if ($content instanceof HtmlElementInterface) {
                    $this->addNested($content);
                } else {
                    $this->content = (string)$content;
                }
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

 * newAttributeList()

 *

 * @since v1.0.0 2026-04-14

 * @return void

 */
    /**
 * newAttributeList
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function newAttributeList(): void
    {
        $this->attributeList = new HtmlAttributeList();
    }
    
/**
    
 * addNested()
    
 *
    
 * @since v1.0.0 2026-04-14
    
 * @param HtmlElementInterface $element
    
 * @return self
    
 */
    /**
 * addNested
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $element
 * @return self
 */
function addNested(HtmlElementInterface $element): self
    {
        $this->nested[] = $element;
	return $this;
    }
    

    /**
    

     * Get the current value of an attribute (if present)
    

     *
    

     * @since v1.0.5 2026-04-14
    

     * @param string $name
    

     * @return ?string
    

     */
    public /**
 * getAttributeValue
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return ?string
 */
function getAttributeValue(string $name): ?string
    {
        if (method_exists($this->attributeList, 'getAttributeValue')) {
            $val = $this->attributeList->getAttributeValue($name);
            if ($val !== null) {
                return $val;
            }
        }

        // If attribute not found in attribute list, check ARIA attributes
        // Support 'role' and 'aria-*' lookups
        if (property_exists($this, 'ariaAttributes')) {
            if ($name === 'role' && isset($this->ariaAttributes['role'])) {
                return $this->ariaAttributes['role'];
            }
            if (str_starts_with($name, 'aria-')) {
                $key = substr($name, 5);
                if (isset($this->ariaAttributes[$key])) {
                    return $this->ariaAttributes[$key];
                }
            }
        }
        return null;
    }

    /**

     * Remove an attribute from the element

     *

     * @since v1.0.0 2026-04-13

     * @param string $name Attribute name to remove

     * @return self (Fluent interface)

     */
    public /**
 * removeAttribute
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return self
 */
function removeAttribute(string $name): self
    {
        if (method_exists($this->attributeList, 'removeAttribute')) {
            $this->attributeList->removeAttribute($name);
        }
        return $this;
    }

/**

 * setAttributeList()

 *

 * @since v1.0.0 2026-04-14

 * @param HtmlAttributeList $list

 * @return self

 */
    /**
 * setAttributeList
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $list
 * @return self
 */
function setAttributeList(HtmlAttributeList $list): self
    {
        $this->attributeList = $list;
	    return $this;
    }
    
/**
    
 * setTag()
    
 *
    
 * @since v1.0.0 2026-04-14
    
 * @param string $tag
    
 * @return self
    
 */
    /**
 * setTag
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $tag
 * @return self
 */
function setTag(string $tag): self
    {
        $this->tag = strtolower($tag); // XHTML requires lowercase
	    return $this;
    }

    /**

     * Renders HTML for all nested children and text content

     *

     * @since v1.0.0 2026-04-13

     * @return string HTML string of all nested children

     */
    protected /**
 * renderChildrenHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function renderChildrenHtml(): string
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

     * The HTML is echoed directly into the output.

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

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public /**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void
    {
        echo $this->getHtml();
    }
    
    /**
    
     * Get HTML representation as string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string Complete HTML element string
    
     */
    public /**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
    {
        $html = '<' . $this->tag;
        $attr = $this->renderAttributesString();

        if ($this->empty) {
            $html .= $attr . '/>';
            return $html;
        }

        $html .= $attr . '>';
        $html .= $this->renderChildrenHtml();
        $html .= '</' . $this->tag . '>';
        return $html;
    }
    
    /**
    
     * Get HTML attributes as string
    
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
    
     * Includes both regular attributes and event handlers
    
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
    
     * @return string Formatted attribute string
    
     */
    /**
     * Return attribute objects as an array for introspection.
     *
     * 
     * 
     * Use `renderAttributesString()` to get the HTML string form.
     * 
     * 
     * 
     *
     * @since v1.0.0 2026-04-13
     * @return array Array of attribute objects
     */
    public /**
 * getAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getAttributes(): array
    {
        if (method_exists($this->attributeList, 'getAllAttributes')) {
            return $this->attributeList->getAllAttributes();
        }
        return [];
    }

    /**

     * Render attributes as string for HTML output (internal use).

     *

     * @since v1.0.0 2026-04-13

     * @return string

     */
    protected /**
 * renderAttributesString
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function renderAttributesString(): string
    {
        $parts = [];
        $attrHtml = $this->attributeList->getHtml();
        if ($attrHtml !== '') {
            $parts[] = $attrHtml;
        }
        $eh = $this->renderEventHandlers();
        if ($eh !== '') {
            $parts[] = $eh;
        }
        $da = $this->renderDataAttributes();
        if ($da !== '') {
            $parts[] = $da;
        }
        $aria = $this->renderAriaAttributes();
        if ($aria !== '') {
            $parts[] = $aria;
        }

        $inner = trim(implode(' ', $parts));
        return $inner !== '' ? ' ' . $inner : '';
    }
}
