<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElement;

/**

 * HtmlOption

 *

 * 

 * Represents an HTML <option> element for use within <select> elements.

 * 

 * This class provides a type-safe, object-oriented way to create HTML option elements

 * with automatic HTML escaping for security. Supports the selected state and custom

 * attributes.

 * 

 * Security:

 * - Automatically HTML-escapes value and label to prevent XSS attacks

 * - Safe to use with user-provided data

 * 

 * Usage:

 * ```php

 * // Basic option

 * $option = new HtmlOption('value1', 'Label 1');

 * echo $option->getHtml(); // <option value="value1">Label 1</option>

 * 

 * // Selected option

 * $option = new HtmlOption('value2', 'Label 2', true);

 * echo $option->getHtml(); // <option value="value2" selected>Label 2</option>

 * 

 * // With custom attributes

 * $option = new HtmlOption('value3', 'Label 3');

 * $option->setAttribute('disabled', 'disabled');

 * $option->setAttribute('data-price', '99.99');

 * 

 * // Fluent interface

 * $option = new HtmlOption('value4', 'Label 4')

 *     ->setSelected(true)

 *     ->setAttribute('class', 'premium');

 * ```

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML

 * @author Claude AI Assistant

 * @version 1.0.0

 */
class HtmlOption extends HtmlElement
{
    /**
     *
     * @var string The option value
     */
    private $value;

    /**

     *

     * @var string The option label (visible text)

     */
    private $label;

    /**

     *

     * @var bool Whether this option is selected

     */
    private $selected;

    /**

     *

     * @var HtmlAttributeList List of HTML attributes

     */

    /**

     * Constructor

     *

     * @since 20251020

     * @param mixed $value

     * @param mixed $label

     * @param bool $selected

     * @return void

     */
    public function __construct($value, $label, bool $selected = false)
    {
        parent::__construct();
        $this->value = $value instanceof HtmlElementInterface ? $value->getHtml() : (string)$value;
        $this->label = $label instanceof HtmlElementInterface ? $label->getHtml() : (string)$label;
        $this->selected = $selected;
        $this->setTag('option');
    }

    // ...existing code...

    /**

     * Get the option value

     *

     * @since 20251020

     * @return string The option value

     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**

     * Get the option label

     *

     * @since 20251020

     * @return string The option label

     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**

     * Check if this option is selected

     *

     * @since 20251020

     * @return bool True if selected, false otherwise

     */
    public function isSelected(): bool
    {
        return $this->selected;
    }

    /**

     * Set the selected state

     *

     * @since 20251020

     * @param bool $selected Whether this option is selected

     * @return self For fluent interface

     */
    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;
        return $this;
    }

    /**

     * Generate the HTML for this option element

     *

     * @since 20251020

     * @return string The HTML <option> element

     */
    public function getHtml(): string
    {
        $escapedValue = htmlspecialchars($this->value, ENT_QUOTES, 'UTF-8');
        $escapedLabel = htmlspecialchars($this->label, ENT_QUOTES, 'UTF-8');

        $html = '<option value="' . $escapedValue . '"';

        // Add selected attribute if needed
        if ($this->selected) {
            $html .= ' selected';
        }

        // Add custom attributes
        $attributesHtml = $this->attributeList->getHtml();
        if ($attributesHtml !== '') {
            $html .= ' ' . $attributesHtml;
        }

        $html .= '>' . $escapedLabel . '</option>';

        return $html;
    }

    /**

     * Output the HTML for this option element

     *

     * @since 20251020

     * @return void

     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }
}
