<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Form;

use Ksfraser\HTML\Elements\HtmlInput;
use Ksfraser\HTML\Elements\HtmlHidden;
use Ksfraser\HTML\Elements\HtmlSelect;
use Ksfraser\HTML\Elements\HtmlTextarea;
use Ksfraser\HTML\Attributes\HtmlNameValue;

/**
 * FormBuilder
 *
 * A framework-agnostic form element builder with data-binding support.
 *
 * Bind a data array (or any ArrayAccess object) with withData() and element
 * factory methods will automatically pre-fill value attributes from the bound
 * data.  withData() returns a new instance so the original builder is
 * unaffected (immutable pattern).
 *
 * Usage:
 * ```php
 * $form = new FormBuilder();
 * $bound = $form->withData(['name' => 'Alice', 'age' => '30']);
 *
 * echo $bound->text('name');          // <input type="text" name="name" value="Alice">
 * echo $bound->email('email');        // <input type="email" name="email">   (no data)
 * echo $bound->password('pass');      // <input type="password" name="pass"> (never pre-filled)
 * echo $bound->select('age', [
 *     '10' => 'Ten', '30' => 'Thirty'  // 'Thirty' selected via data
 * ]);
 * echo $bound->textarea('bio');       // <textarea name="bio"></textarea>
 * echo $bound->hidden('csrf', 'tok'); // <input type="hidden" name="csrf" value="tok">
 * ```
 *
 * @package Ksfraser\HTML\Form
 * @author  Kevin Fraser
 * @since   20260428
 */
class FormBuilder
{
    /** @var array|\ArrayAccess */
    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    /**
     * Return a new FormBuilder instance bound to the supplied data.
     *
     * @param array|\ArrayAccess $data Key-value pairs used to pre-fill form elements.
     * @return static New immutable instance with the data context set.
     */
    public function withData($data): static
    {
        $clone = clone $this;
        $clone->data = $data;
        return $clone;
    }

    // -------------------------------------------------------------------------
    // Element factory methods
    // -------------------------------------------------------------------------

    /**
     * Create a text input, pre-filled from bound data if available.
     *
     * @param string      $field   The name attribute / data key.
     * @param string|null $default Fallback value when the key is absent from data.
     * @return HtmlInput
     */
    public function text(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'text');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create an email input, pre-filled from bound data if available.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlInput
     */
    public function email(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'email');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a password input.
     * Password fields are NEVER pre-filled regardless of bound data.
     *
     * @param string $field
     * @return HtmlInput
     */
    public function password(string $field): HtmlInput
    {
        $input = new HtmlInput(null, 'password');
        $input->setName($field);
        return $input;
    }

    /**
     * Create a hidden input, pre-filled from bound data or the explicit default.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlInput
     */
    public function hidden(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'hidden');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a number input, pre-filled from bound data if available.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlInput
     */
    public function number(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'number');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a select element whose options are pre-selected from bound data.
     *
     * @param string               $field   The name attribute / data key.
     * @param array<string,string> $options Associative array of value => label.
     * @param string|null          $default Fallback selected value.
     * @return HtmlSelect
     */
    public function select(string $field, array $options, ?string $default = null): HtmlSelect
    {
        $selectedValue = $this->resolve($field, $default);
        $select = new HtmlSelect(new HtmlNameValue($field));
        $select->addOptionsFromArray($options, $selectedValue);
        return $select;
    }

    /**
     * Create a textarea, pre-filled from bound data if available.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlTextarea
     */
    public function textarea(string $field, ?string $default = null): HtmlTextarea
    {
        $ta = new HtmlTextarea($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $ta->setValue($value);
        }
        return $ta;
    }

    // -------------------------------------------------------------------------
    // Internal helpers
    // -------------------------------------------------------------------------

    /**
     * Resolve the value for a field from the bound data, falling back to $default.
     *
     * @param string      $field
     * @param string|null $default
     * @return string|null
     */
    private function resolve(string $field, ?string $default): ?string
    {
        if (is_array($this->data) && array_key_exists($field, $this->data)) {
            return (string) $this->data[$field];
        }

        if ($this->data instanceof \ArrayAccess && isset($this->data[$field])) {
            return (string) $this->data[$field];
        }

        return $default;
    }
}
