<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlEmptyElement;

/**

 * Input - Factory/convenience wrapper for HTML input element

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

 * Provides fluent interface for building form input fields.

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

 * - (new Input())->setType('text')->setName('username')->setAttribute('placeholder', 'Enter username')->render()

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

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML\Elements

 * @return void

 */
class Input {
    private $element;
    
    /**
    
     * Create a new input element
    
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
    
     *                      If provided, automatically sets the type attribute
    
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
    
     * @since v1.0.0 2026-04-11
    
     * @param string $type Optional input type (text, email, password, hidden, etc.)
    
     * @return void
    
     */
    public function __construct(string $type = '') {
        // Create a basic HtmlEmptyElement for input instead of HtmlInput
        // to avoid HtmlInput's automatic type="text" addition
        $this->element = new HtmlEmptyElement();
        $this->element->setTag('input');
        
        // Only add type if explicitly provided
        if ($type) {
            $this->element->addAttributeObject(new HtmlAttribute('type', $type));
        }
    }
    
    /**
    
     * Get the underlying HTML element
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return HtmlEmptyElement The wrapped HTML element
    
     */
    public function getHtmlElement(): HtmlEmptyElement {
        return $this->element;
    }
    
    /**
    
     * Set the input type attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $type Input type (text, email, password, hidden, checkbox, radio, etc.)
    
     * @return self Fluent interface
    
     */
    public function setType(string $type): self {
        $this->element->addAttributeObject(new HtmlAttribute('type', $type));
        return $this;
    }
    
    /**
    
     * Set the input name attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $name Input name
    
     * @return self Fluent interface
    
     */
    public function setName(string $name): self {
        $this->element->addAttributeObject(new HtmlAttribute('name', $name));
        return $this;
    }
    
    /**
    
     * Set the input value attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $value Input value
    
     * @return self Fluent interface
    
     */
    public function setValue(string $value): self {
        $this->element->addAttributeObject(new HtmlAttribute('value', htmlspecialchars($value)));
        return $this;
    }
    
    /**
    
     * Set the input id attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $id Input id
    
     * @return self Fluent interface
    
     */
    public function setId(string $id): self {
        $this->element->addAttributeObject(new HtmlAttribute('id', $id));
        return $this;
    }
    
    /**
    
     * Set the placeholder attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $placeholder Placeholder text
    
     * @return self Fluent interface
    
     */
    public function setPlaceholder(string $placeholder): self {
        $this->element->addAttributeObject(new HtmlAttribute('placeholder', htmlspecialchars($placeholder)));
        return $this;
    }
    
    /**
    
     * Mark the input as required
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param bool $required Whether the input is required
    
     * @return self Fluent interface
    
     */
    public function setRequired(bool $required = true): self {
        if ($required) {
            $this->element->addAttributeObject(new HtmlAttribute('required', 'required'));
        }
        return $this;
    }
    
    /**
    
     * Set the input step attribute (for number inputs)
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $step Step value
    
     * @return self Fluent interface
    
     */
    public function setStep(string $step): self {
        $this->element->addAttributeObject(new HtmlAttribute('step', $step));
        return $this;
    }
    
    /**
    
     * Set the input min attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $min Minimum value
    
     * @return self Fluent interface
    
     */
    public function setMin(string $min): self {
        $this->element->addAttributeObject(new HtmlAttribute('min', $min));
        return $this;
    }
    
    /**
    
     * Set the input max attribute
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @param string $max Maximum value
    
     * @return self Fluent interface
    
     */
    public function setMax(string $max): self {
        $this->element->addAttributeObject(new HtmlAttribute('max', $max));
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
        $this->element->addAttributeObject(new HtmlAttribute($name, $value));
        return $this;
    }
    
    /**
    
     * Get HTML representation as string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML input element
    
     */
    public function getHtml(): string {
        return $this->element->getHtml();
    }
    
    /**
    
     * Render the input to HTML string
    
     *
    
     * @since v1.0.0 2026-04-13
    
     * @return string The complete HTML input element
    
     */
    public function render(): string {
        return $this->getHtml();
    }
}


