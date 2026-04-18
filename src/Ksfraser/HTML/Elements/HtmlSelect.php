<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlOption;

/**

 * HtmlSelect

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

 * Represents an HTML <select> element with options.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This class provides a type-safe, object-oriented way to create HTML select elements

 * 

 * 

 * 

 * with automatic HTML escaping for security. Supports multiple options, selected states,

 * 

 * 

 * 

 * and standard select attributes (multiple, size, disabled, required).

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Security:

 * 

 * 

 * 

 * - Automatically HTML-escapes name and attribute values

 * 

 * 

 * 

 * - Safe to use with user-provided data

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

 * ```php

 * 

 * 

 * 

 * // Basic select

 * 

 * 

 * 

 * $select = new HtmlSelect('country');

 * 

 * 

 * 

 * $select->addOption(new HtmlOption('ca', 'Canada'));

 * 

 * 

 * 

 * $select->addOption(new HtmlOption('us', 'United States'));

 * 

 * 

 * 

 * echo $select->getHtml();

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // From array with selected value

 * 

 * 

 * 

 * $select = new HtmlSelect('color');

 * 

 * 

 * 

 * $colors = ['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue'];

 * 

 * 

 * 

 * $select->addOptionsFromArray($colors, 'green');

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // With attributes

 * 

 * 

 * 

 * $select = new HtmlSelect('size');

 * 

 * 

 * 

 * $select->setId('size-selector')

 * 

 * 

 * 

 *        ->setClass('form-control')

 * 

 * 

 * 

 *        ->setRequired(true)

 * 

 * 

 * 

 *        ->addOptionsFromArray(['S' => 'Small', 'M' => 'Medium', 'L' => 'Large']);

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Multiple select

 * 

 * 

 * 

 * $select = new HtmlSelect('tags[]');

 * 

 * 

 * 

 * $select->setMultiple(true)

 * 

 * 

 * 

 *        ->setSize(5)

 * 

 * 

 * 

 *        ->addOptionsFromArray(['tag1' => 'Tag 1', 'tag2' => 'Tag 2']);

 * 

 * 

 * 

 * ```

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

 * @since v0.0.1 2025-10-20

 * @package Ksfraser\HTML

 * @author Claude AI Assistant

 * @version 1.0.0

 * @return void

 */
use Ksfraser\HTML\HtmlElement;

/**

 * class HtmlSelect

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlSelect
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlSelect extends HtmlElement
{
    /**
     *
     * @var HtmlElementInterface The select element name (as a value object)
     * @return void
     */
    private $name;

    /**

     *

     * @var HtmlOption[] Array of option elements

     * @return void

     */
    private $options;


    /**


     * Constructor


     *


     * @since v0.0.1 2025-10-20


     * @param mixed $name


     * @return void


     */
    public /**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
function __construct($name = '')
    {
        parent::__construct();
        if ($name instanceof HtmlElementInterface) {
            $this->name = $name;
        } else {
            $this->name = new HtmlString((string)$name);
        }
        $this->options = [];
        $this->setTag('select');
        $this->addAttribute('id', 'select');
    }

    /**

     * Get the select name (as string)

     *

     * @since v0.0.1 2025-10-20

     * @return string The select name

     */
    public /**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getName(): string
    {
        return $this->name->getHtml();
    }

    /**

     * Add an option to the select

     *

     * @since v0.0.1 2025-10-20

     * @param mixed $valueOrOption

     * @param string $text

     * @param bool $selected

     * @return self For fluent interface

     */
    public /**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @param mixed $valueOrOption
 * @param string $text
 * @param bool $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
/**
 * addOption
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $valueOrOption
 * @param mixed $text
 * @param mixed $selected
 * @return self
 */
function addOption($valueOrOption, string $text = '', bool $selected = false): self
    {
        if ($valueOrOption instanceof HtmlOption) {
            $option = $valueOrOption;
        } else {
            $option = new HtmlOption((string)$valueOrOption, $text !== '' ? $text : (string)$valueOrOption, $selected);
        }
        $this->options[] = $option;
        $this->addNested($option);
        return $this;
    }

    /**

     * Add multiple options from an associative array

     *

     * @since v0.0.1 2025-10-20

     * @param array $data

     * @param ?string $selectedValue

     * @return self For fluent interface

     */
    public /**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @param array $data
 * @param string|null $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
/**
 * addOptionsFromArray
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @param mixed $selectedValue
 * @return self
 */
function addOptionsFromArray(array $data, ?string $selectedValue = null): self
    {
        foreach ($data as $value => $label) {
            $isSelected = ($selectedValue !== null && (string)$value === $selectedValue);
            $this->addOption((string)$value, $label, $isSelected);
        }
        return $this;
    }

    /**

     * Get all options

     *

     * @since v0.0.1 2025-10-20

     * @return array

     */
    public /**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getOptions
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getOptions(): array
    {
        return $this->options;
    }

    /**

     * Get count of options

     *

     * @since v0.0.1 2025-10-20

     * @return int Number of options

     */
    public /**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
/**
 * getOptionCount
 *
 * @since v1.0.0 2026-04-14
 * @return int
 */
function getOptionCount(): int
    {
        return count($this->options);
    }

    /**

     * Set the ID attribute

     *

     * @since v0.0.1 2025-10-20

     * @param string $id Element ID

     * @return self For fluent interface

     */
    public /**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @param string $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
/**
 * setId
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $id
 * @return self
 */
function setId(string $id): self
    {
        $this->attributeList->addAttributeObject(new HtmlAttribute('id', $id));
        return $this;
    }

    /**

     * Set the class attribute

     *

     * @since v0.0.1 2025-10-20

     * @param string $class CSS class name(s)

     * @return self For fluent interface

     */
    public /**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @param string $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
/**
 * setClass
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $class
 * @return self
 */
function setClass(string $class): self
    {
        $this->attributeList->addAttributeObject(new HtmlAttribute('class', $class));
        return $this;
    }

    /**

     * Set multiple attribute

     *

     * @since v0.0.1 2025-10-20

     * @param bool $multiple Whether to allow multiple selections

     * @return self For fluent interface

     */
    public /**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @param bool $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
/**
 * setMultiple
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $multiple
 * @return self
 */
function setMultiple(bool $multiple): self
    {
        if ($multiple) {
            $this->attributeList->addAttributeObject(new HtmlAttribute('multiple', 'multiple'));
        }
        return $this;
    }

    /**

     * Set size attribute (number of visible options)

     *

     * @since v0.0.1 2025-10-20

     * @param int $size Number of visible options

     * @return self For fluent interface

     */
    public /**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @param int $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
/**
 * setSize
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $size
 * @return self
 */
function setSize(int $size): self
    {
        $this->attributeList->addAttributeObject(new HtmlAttribute('size', (string)$size));
        return $this;
    }

    /**

     * Set disabled attribute

     *

     * @since v0.0.1 2025-10-20

     * @param bool $disabled Whether the select is disabled

     * @return HtmlElement

     */
    public /**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @param bool $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
/**
 * setDisabled
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $disabled
 * @return HtmlElement
 */
function setDisabled(bool $disabled = true): HtmlElement
    {
        if ($disabled) {
            $this->attributeList->addAttributeObject(new HtmlAttribute('disabled', 'disabled'));
        }
        return $this;
    }

    /**

     * Set required attribute

     *

     * @since v0.0.1 2025-10-20

     * @param bool $required Whether the select is required

     * @return HtmlElement

     */
    public /**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @param bool $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
/**
 * setRequired
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $required
 * @return HtmlElement
 */
function setRequired(bool $required = true): HtmlElement
    {
        if ($required) {
            $this->attributeList->addAttributeObject(new HtmlAttribute('required', 'required'));
        }
        return $this;
    }

    /**

     * Add a custom attribute

     *

     * @since v0.0.1 2025-10-20

     * @param string $name Attribute name

     * @param string $value Attribute value

     * @return self For fluent interface

     */
    // setAttribute removed because of Trait

    /**

     * Generate the HTML for this select element

     *

     * @since v0.0.1 2025-10-20

     * @return string The HTML <select> element with all options

     */
    public /**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
    {
        $escapedName = $this->name->getHtml();

        $html = '<select name="' . $escapedName . '"';

        // Add custom attributes
        $attributesHtml = $this->attributeList->getHtml();
        if ($attributesHtml !== '') {
            $html .= ' ' . $attributesHtml;
        }

        $html .= '>';

        // Add all options
        foreach ($this->options as $option) {
            $html .= $option->getHtml();
        }

        $html .= '</select>';

        return $html;
    }

    /**

     * Output the HTML for this select element

     *

     * @since v0.0.1 2025-10-20

     * @return void

     */
    public /**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void
    {
        echo $this->getHtml();
    }
}
