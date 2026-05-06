<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlAttributeList;

/**
 * HtmlSelect
 *
 * Represents an HTML <select> element with options.
 *
 * @package    Ksfraser\HTML
 * @since      20251020
 */
class HtmlSelect extends HtmlElement
{
    /**
     * @var string The select element name
     */
    private $name;

    /**
     * @var HtmlOption[] Array of option elements
     */
    private $options;

    /**
     * Constructor
     *
     * @param string|HtmlElementInterface $name The select element name
     *
     * @since 20251020
     */
    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name instanceof HtmlElementInterface ? $name->getHtml() : (string)$name;
        $this->options = [];
        $this->setTag('select');
    }

    /**
     * Get the select name
     *
     * @return string The select name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Add an option to the select.
     *
     * @param HtmlOption|string $valueOrOption HtmlOption object OR the option value string
     * @param string            $text          Option display text (used when first param is string)
     * @param bool              $selected      Whether the option is selected
     *
     * @return self
     */
    public function addOption($valueOrOption, string $text = '', bool $selected = false): self
    {
        if ($valueOrOption instanceof HtmlOption) {
            $this->options[] = $valueOrOption;
        } else {
            $this->options[] = new HtmlOption(
                $valueOrOption,
                $text !== '' ? $text : $valueOrOption,
                $selected
            );
        }
        return $this;
    }

    /**
     * Add multiple options from an associative array
     *
     * @param array       $data          Key-value pairs (value => label)
     * @param string|null $selectedValue Optional value to mark as selected
     *
     * @return self
     */
    public function addOptionsFromArray(array $data, $selectedValue = null): self
    {
        foreach ($data as $value => $label) {
            $isSelected = ($selectedValue !== null && (string)$value === (string)$selectedValue);
            $this->addOption((string)$value, (string)$label, $isSelected);
        }
        return $this;
    }

    /**
     * Get all options
     *
     * @return HtmlOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Get count of options
     *
     * @return int
     */
    public function getOptionCount(): int
    {
        return count($this->options);
    }

    /**
     * Set the ID attribute
     *
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        return $this->setAttribute('id', $id);
    }

    /**
     * Set the class attribute
     *
     * @param string $class
     * @return self
     */
    public function setClass(string $class): self
    {
        return $this->setAttribute('class', $class);
    }

    /**
     * Set multiple attribute
     *
     * @param bool $multiple
     * @return self
     */
    public function setMultiple(bool $multiple = true): self
    {
        if ($multiple) {
            $this->setAttribute('multiple', 'multiple');
        }
        return $this;
    }

    /**
     * Set size attribute
     *
     * @param int $size
     * @return self
     */
    public function setSize(int $size): self
    {
        return $this->setAttribute('size', (string)$size);
    }

    /**
     * Set disabled attribute
     *
     * @param bool $disabled
     * @return self
     */
    public function setDisabled(bool $disabled = true): self
    {
        if ($disabled) {
            $this->setAttribute('disabled', 'disabled');
        }
        return $this;
    }

    /**
     * Set required attribute
     *
     * @param bool $required
     * @return self
     */
    public function setRequired(bool $required = true): self
    {
        if ($required) {
            $this->setAttribute('required', 'required');
        }
        return $this;
    }

    /**
     * Generate the HTML for this select element
     *
     * @return string
     */
    public function getHtml(): string
    {
        $escapedName = htmlspecialchars($this->name, ENT_QUOTES, 'UTF-8');

        $html = '<select name="' . $escapedName . '"';

        $attributesHtml = $this->attributeList->getHtml();
        if ($attributesHtml !== '') {
            $html .= ' ' . $attributesHtml;
        }

        $html .= '>';

        foreach ($this->options as $option) {
            $html .= $option->getHtml();
        }

        $html .= '</select>';

        return $html;
    }

    /**
     * Output the HTML for this select element
     *
     * @return void
     */
    public function toHtml(): void
    {
        echo $this->getHtml();
    }
}
