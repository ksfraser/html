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
    
    /**
     * Text content node — always stored as HtmlElementInterface so the rendering
     * path is unified: content reaches the output via ->getHtml() exactly the
     * same way as every other child in $nested.  Strings are auto-wrapped in
     * HtmlString, which performs HTML-escaping on render.
     *
     * Keeping this separate from $nested preserves "set replaces" semantics:
     * a second call to setTextContent() replaces the previous text node rather
     * than appending to the child list.
     *
     * @var HtmlElementInterface|null
     */
    protected ?HtmlElementInterface $textContent = null;
    
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
        $this->textContent = null;
        $this->tag = null;
        
        // Handle tag string parameter
        if (is_string($tagOrData)) {
            $this->setTag($tagOrData);
            // If content provided with tag, add as text
            if ($content !== null && $content !== '') {
                $this->textContent = new HtmlString($content);
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
     * Set the text content of the element (replaces any existing text content).
     *
     * Accepts either a plain string or any HtmlElementInterface node.
     * Strings are auto-wrapped in HtmlString, which HTML-escapes on render.
     * Passing an HtmlElementInterface lets callers supply pre-built nodes
     * (e.g. HtmlRaw for trusted markup) without a second wrapper.
     *
     * Internally the value is stored as HtmlElementInterface so rendering
     * always goes through ->getHtml() — the same path used for all $nested
     * children. No inline htmlspecialchars() call is needed here.
     *
     * @param string|HtmlElementInterface $content Plain text or an element node
     * @return self (Fluent interface)
     */
    public function setTextContent(string|HtmlElementInterface $content): self
    {
        if (is_string($content)) {
            $content = new HtmlString($content);
        }
        $this->textContent = $content;
        return $this;
    }

    /**
     * Conditionally set an attribute on the element.
     * When $condition is false the call is a no-op.
     *
     * @param bool   $condition Set the attribute only when this is true
     * @param string $name      Attribute name
     * @param string $value     Attribute value
     * @return self (Fluent interface)
     */
    public function setAttributeIf(bool $condition, string $name, string $value): self
    {
        if ($condition) {
            $this->setAttribute($name, $value);
        }
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
     * Alias for removeAttribute(). Removes an attribute by name.
     *
     * @param string $key Attribute name to remove
     * @return self (Fluent interface)
     */
    public function forgetAttribute(string $key): self
    {
        return $this->removeAttribute($key);
    }

    /**
     * Append a value to an existing attribute, or set it if absent.
     *
     * Attributes are stored as HtmlAttribute objects inside an HtmlAttributeList
     * (the full class-based object model).  This method:
     *   1. Reads the current rendered value via HtmlAttributeList::getAttributeValue(),
     *      which calls HtmlAttribute::getValue() on the stored object.
     *   2. Concatenates the new value using $separator.
     *   3. Writes back via setAttribute(), which wraps the result in a new
     *      HtmlString and stores it as a fresh HtmlAttribute object.
     *
     * The HtmlAttribute / HtmlAttributeList object model is fully preserved;
     * no raw string storage ever occurs outside the value objects.
     *
     * Typical use-cases: building up class lists, rel tokens, accept lists:
     *   $el->appendAttribute('class', 'btn')           // class="btn"
     *   $el->appendAttribute('class', 'btn-primary')   // class="btn btn-primary"
     *   $el->appendAttribute('accept', 'image/png', ',') // accept="image/jpeg,image/png"
     *
     * @param string $key       Attribute name
     * @param string $value     Value to append
     * @param string $separator String placed between old and new values (default: ' ')
     * @return self (Fluent interface)
     */
    public function appendAttribute(string $key, string $value, string $separator = ' '): self
    {
        $current = $this->getAttributeValue($key);
        if ($current === null || $current === '') {
            return $this->setAttribute($key, $value);
        }
        return $this->setAttribute($key, $current . $separator . $value);
    }

    /**
     * Conditionally add a nested child element.
     * When $condition is false the call is a no-op.
     *
     * @param bool                 $condition Add the element only when this is true
     * @param HtmlElementInterface $element   Element to nest
     * @return self (Fluent interface)
     */
    public function addNestedIf(bool $condition, HtmlElementInterface $element): self
    {
        if ($condition) {
            $this->addNested($element);
        }
        return $this;
    }

    /**
     * Append raw (unescaped) HTML as inner content.
     * Use with caution — only pass pre-sanitised markup.
     *
     * @param string $rawHtml Raw HTML to embed verbatim
     * @return self (Fluent interface)
     */
    public function html(string $rawHtml): self
    {
        $this->addNested(new \Ksfraser\HTML\Elements\HtmlRaw($rawHtml));
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
     * Renders HTML for all nested children and text content.
     *
     * Text content (if set) is rendered first via $this->textContent->getHtml(),
     * followed by each child in $nested.  Both paths go through HtmlElementInterface
     * ::getHtml() — there is no inline htmlspecialchars() call here; escaping
     * is the responsibility of the concrete element (e.g. HtmlString).
     *
     * @return string HTML string of all nested children
     */
    protected function renderChildrenHtml(): string
    {
        $html = '';

        if ($this->textContent !== null) {
            $html .= $this->textContent->getHtml();
        }

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
