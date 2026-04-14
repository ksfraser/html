<?php

namespace Ksfraser\HTML\Attributes;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Base class for complex HTML attribute value objects (e.g., style, class, data-*)

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

 * Provides common getHtml() and toHtml() logic.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This class is intentionally separate from HtmlAttribute. HtmlAttribute is for simple, single name-value pairs (e.g., name="value").

 * 

 * 

 * 

 * HtmlAttributeValueObject is for attributes whose value is composed or aggregated from multiple sub-values

 * 

 * 

 * 

 *  such as style="color:red;font-size:12px;" or class="btn primary".

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Use HtmlAttribute for generic name-value pairs.

 * 

 * 

 * 

 * Use HtmlAttributeValueObject as a base for attributes that aggregate or compose their value from multiple items.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Example: HtmlStyleList (for style attribute) or a

 * 

 * 

 * 

 * future HtmlClassList (for class attribute) would extend this class and implement how the value string is constructed.

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

 * @since 1.0.3 2026-02-21

 * @return void

 */
abstract class HtmlAttributeValueObject implements HtmlElementInterface
{
    /**
     * The attribute name (e.g., 'style', 'class', 'data-*')
     *
     * @var string
     * @return void
     */
    protected $attributeName;

    /**

     * The array of sub-attributes (e.g., styles, classes)

     *

     * @var array

     * @return void

     */
    protected $attributeArray = [];

    /**

     * Add a sub-attribute to the list

     *

     * @since 1.0.4 2026-02-21

     * @param object $item

     * @return void

     */
    public function addAttributeValueObject(object $item): void
    {
        $this->attributeArray[] = $item;
    }

    /**

     * Set (add or replace) a sub-attribute in the list by name

     *

     * @since v1.0.0 2026-04-13

     * @param object $item

     * @return void

     */
    public function setAttributeValueObject(object $item): void
    {
        $name = $item->getName();
        foreach ($this->attributeArray as $idx => $existing) {
            if ($existing->getName() === $name) {
                $this->attributeArray[$idx] = $item;
                return;
            }
        }
        $this->addAttributeValueObject($item);
    }

    /**

     * Get a sub-attribute value by name

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

     * Render the attribute as HTML (e.g., style="color:red;")

     *

     * @since v1.0.0 2026-04-13

     * @return string

     */
    public function getHtml(): string
    {
        $value = $this->getAttributeValueString();
        if ($value === '') {
            return '';
        }
        return $this->attributeName . '="' . $value . '"';
    }

    /**

     * Output the HTML directly

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }

    /**

     * Subclasses must implement this to return the value string for the attribute

     *

     * @since v1.0.0 2026-04-13

     * @return string

     */
    abstract protected function getAttributeValueString(): string;
}
