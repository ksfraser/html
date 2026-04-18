<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlElement;

/**
 * HtmlOption
 *
 * Represents an HTML <option> element for use within <select> elements.
 *
 * This class provides a type-safe, object-oriented way to create HTML option elements
 * with automatic HTML escaping for security. Supports the selected state and custom
 * attributes.
 *
 * @since v1.0.0 2026-04-11
 * @package Ksfraser\HTML
 */
class HtmlOption extends HtmlElement
{
    /** @var string The option value */
    private $value;

    /** @var string The option label (visible text) */
    private $label;

    /** @var bool Whether this option is selected */
    private $selected;

    /**
     * Constructor
     *
     * @since 20251020
     * @param mixed $value
     * @param mixed $label
     * @param bool $selected
     */
    public function __construct($value, $label, bool $selected = false)
    {
        parent::__construct();
        $this->value = $value instanceof HtmlElementInterface ? $value->getHtml() : (string)$value;
        $this->label = $label instanceof HtmlElementInterface ? $label->getHtml() : (string)$label;
        $this->selected = $selected;
        $this->setTag('option');
    }

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
