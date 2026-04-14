<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlAttributeList
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlAttributeList implements HtmlElementInterface
{
    protected $attributeArray;

    /**
     * Constructor
     *
     * @param mixed $attribute
     * @return void
 * @since 1.0.3 2026-02-21
     */
    public function __construct($attribute = null)
    {
        $this->attributeArray = array();
        if ($attribute !== null) {
            $this->addAttributeObject($attribute);
        }
    }

    /**
     * Add an attribute to the list
     *
     * @param mixed $attribute
     * @return void
 * @since v1.0.5 2026-04-14
     */
    public function addAttributeObject($attribute): void
    {
        if (!($attribute instanceof HtmlAttribute)) {
            throw new \InvalidArgumentException("HtmlAttributeList only accepts HtmlAttribute objects.");
        }
        $this->attributeArray[] = $attribute;
        return;
    }

    /**
     * Set (add or replace) an attribute in the list.
     *
     * If an attribute with the same name already exists, it is replaced.
     *
     * @param HtmlAttribute $attribute
     * @return void
     * @since v1.0.0 2026-04-13
     */
    public function setAttribute(HtmlAttribute $attribute): void
    {
        $name = $attribute->getName();
        foreach ($this->attributeArray as $idx => $existing) {
            if (method_exists($existing, 'getName') && $existing->getName() === $name) {
                $this->attributeArray[$idx] = $attribute;
                return;
            }
        }
        $this->addAttributeObject($attribute);
        return;
    }

    /**
     * Get an attribute value by name.
     *
     * @param string $name
     * @return ?string
 * @since v1.0.5 2026-04-14
     */
    public function getAttributeValue(string $name): ?string
    {
        foreach ($this->attributeArray as $existing) {
            if (method_exists($existing, 'getName') && $existing->getName() === $name) {
                return method_exists($existing, 'getValue') ? $existing->getValue() : null;
            }
        }
        return null;
    }

    /**
     * Get the HtmlAttribute object by name.
     *
     * @param string $name
     * @return HtmlAttribute|null
     * @since v1.0.0 2026-04-13
     */
    public function getAttribute(string $name)
    {
        foreach ($this->attributeArray as $existing) {
            if (method_exists($existing, 'getName') && $existing->getName() === $name) {
                return $existing;
            }
        }
        return null;
    }

    /**
     * Return all attribute objects as an array.
     *
     * @return array Array of HtmlAttribute objects
     * @since v1.0.0 2026-04-13
     */
    public function getAllAttributes(): array
    {
        return $this->attributeArray;
    }

    /**
     * Remove an attribute by name
     *
     * @param string $name Attribute name to remove
     * @return void
     * @since v1.0.0 2026-04-13
     */
    public function removeAttribute(string $name): void
    {
        foreach ($this->attributeArray as $idx => $existing) {
            if (method_exists($existing, 'getName') && $existing->getName() === $name) {
                unset($this->attributeArray[$idx]);
                return;
            }
        }
    }

    /**
     * Output HTML representation
     *
     * @return void
     * @since v1.0.0 2026-04-13
     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }

    /**
     * Get HTML representation as string
     *
     * @return string HTML string of all attributes
     * @since v1.0.0 2026-04-13
     */
    public function getHtml(): string
    {
        $html = "";
        foreach ($this->attributeArray as $attribute) {
            $html .= $attribute->getHtml() . " ";
        }
        return $html;
    }
}
