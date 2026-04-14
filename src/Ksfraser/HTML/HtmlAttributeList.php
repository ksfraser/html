<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlAttributeList

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
class HtmlAttributeList implements HtmlElementInterface
{
    protected $attributeArray;

    /**

     * Constructor

     *

     * @since 1.0.3 2026-02-21

     * @param mixed $attribute

     * @return void

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

     * @since v1.0.5 2026-04-14

     * @param mixed $attribute

     * @return void

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

     * If an attribute with the same name already exists, it is replaced.

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

     * @param HtmlAttribute $attribute

     * @return void

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

     * @since v1.0.5 2026-04-14

     * @param string $name

     * @return ?string

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

     * @since v1.0.0 2026-04-13

     * @param string $name

     * @return HtmlAttribute|null

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

     * @since v1.0.0 2026-04-13

     * @return array Array of HtmlAttribute objects

     */
    public function getAllAttributes(): array
    {
        return $this->attributeArray;
    }

    /**

     * Remove an attribute by name

     *

     * @since v1.0.0 2026-04-13

     * @param string $name Attribute name to remove

     * @return void

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

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }

    /**

     * Get HTML representation as string

     *

     * @since v1.0.0 2026-04-13

     * @return string HTML string of all attributes

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
