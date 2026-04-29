<?php

declare(strict_types=1);

namespace Ksfraser\HTML\Form;

use Ksfraser\HTML\Elements\HtmlInput;
use Ksfraser\HTML\Elements\HtmlHidden;
use Ksfraser\HTML\Elements\HtmlSelect;
use Ksfraser\HTML\Elements\HtmlTextarea;
use Ksfraser\HTML\Elements\HtmlLabel;
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

    /**
     * Stack of bound data contexts pushed via model().
     * Index 0 is the bottom (outermost) context; top is the end.
     *
     * @var array<array|\ArrayAccess>
     */
    private array $modelStack = [];

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
    // model() / endModel() — scoped data binding
    // -------------------------------------------------------------------------

    /**
     * Push a new data context onto the model stack and return a bound instance.
     *
     * The returned builder uses $data for field resolution. Calling endModel()
     * on the returned instance pops back to the previous context.
     *
     * @param array|\ArrayAccess $data
     * @return static
     */
    public function model($data): static
    {
        $clone = clone $this;
        $clone->modelStack[] = $this->data;   // save current context
        $clone->data = $data;
        return $clone;
    }

    /**
     * Pop the current data context and return a builder bound to the previous one.
     *
     * Calling endModel() on an already-unbound builder is safe and returns
     * an unbound instance.
     *
     * @return static
     */
    public function endModel(): static
    {
        $clone = clone $this;
        if (!empty($clone->modelStack)) {
            $clone->data = array_pop($clone->modelStack);
        } else {
            $clone->data = [];
        }
        return $clone;
    }

    // -------------------------------------------------------------------------
    // Additional element factory methods
    // -------------------------------------------------------------------------

    /**
     * Create a <label> element.
     *
     * @param string $for  Value for the `for` attribute
     * @param string $text Visible label text
     * @return HtmlLabel
     */
    public function label(string $for, string $text): HtmlLabel
    {
        return new HtmlLabel($for, $text);
    }

    /**
     * Create a checkbox input, pre-checked from bound data or $default.
     *
     * The checkbox is checked when:
     *  - bound data contains the field AND its value equals $value, OR
     *  - no bound data for the field AND $default is true.
     *
     * @param string $field   The name attribute / data key.
     * @param string $value   The value attribute (defaults to '1').
     * @param bool   $default Fallback checked state when no data is bound.
     * @return HtmlInput
     */
    public function checkbox(string $field, string $value = '1', bool $default = false): HtmlInput
    {
        $input = new HtmlInput(null, 'checkbox');
        $input->setName($field);
        $input->setValue($value);

        $checked = $this->resolveChecked($field, $value, $default);
        if ($checked) {
            $input->setAttribute('checked', 'checked');
        }
        return $input;
    }

    /**
     * Create a radio input, pre-checked from bound data or $default.
     *
     * @param string $field   The name attribute / data key.
     * @param string $value   The value attribute for this radio option.
     * @param bool   $default Fallback checked state when no data is bound.
     * @return HtmlInput
     */
    public function radio(string $field, string $value, bool $default = false): HtmlInput
    {
        $input = new HtmlInput(null, 'radio');
        $input->setName($field);
        $input->setValue($value);

        $checked = $this->resolveChecked($field, $value, $default);
        if ($checked) {
            $input->setAttribute('checked', 'checked');
        }
        return $input;
    }

    /**
     * Create a date input, pre-filled from bound data if available.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlInput
     */
    public function date(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'date');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a search input, pre-filled from bound data if available.
     *
     * @param string      $field
     * @param string|null $default
     * @return HtmlInput
     */
    public function search(string $field, ?string $default = null): HtmlInput
    {
        $input = new HtmlInput(null, 'search');
        $input->setName($field);
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a range input with optional min/max/step and pre-filled value.
     *
     * @param string      $field
     * @param string|null $min
     * @param string|null $max
     * @param string|null $step
     * @param string|null $default
     * @return HtmlInput
     */
    public function range(
        string $field,
        ?string $min = null,
        ?string $max = null,
        ?string $step = null,
        ?string $default = null
    ): HtmlInput {
        $input = new HtmlInput(null, 'range');
        $input->setName($field);
        if ($min !== null) {
            $input->setAttribute('min', $min);
        }
        if ($max !== null) {
            $input->setAttribute('max', $max);
        }
        if ($step !== null) {
            $input->setAttribute('step', $step);
        }
        $value = $this->resolve($field, $default);
        if ($value !== null) {
            $input->setValue($value);
        }
        return $input;
    }

    /**
     * Create a file input.
     * File inputs are NEVER pre-filled regardless of bound data.
     *
     * @param string $field
     * @return HtmlInput
     */
    public function file(string $field): HtmlInput
    {
        $input = new HtmlInput(null, 'file');
        $input->setName($field);
        return $input;
    }

    // -------------------------------------------------------------------------
    // Internal helpers
    // -------------------------------------------------------------------------

    /**
     * Determine the checked state for a checkbox/radio from bound data or default.
     */
    private function resolveChecked(string $field, string $value, bool $default): bool
    {
        if (is_array($this->data) && array_key_exists($field, $this->data)) {
            return (string) $this->data[$field] === $value;
        }
        if ($this->data instanceof \ArrayAccess && isset($this->data[$field])) {
            return (string) $this->data[$field] === $value;
        }
        return $default;
    }

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
