<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * FormElementsTrait - FR-011
 * Provides builder methods for HTML form controls and validation UI
 *
 * Static factory methods for creating form elements:
 * - Forms: form(), fieldset()
 * - Inputs: input(), textarea(), select(), label(), button()
 * - Groups: formGroup(), inputGroup()
 * - Validation: validationFeedback()
 *
 * Integration with previous traits:
 * - CSSManagementTrait: Bootstrap form control classes
 * - AriaAttributeTrait: Accessibility attributes
 * - DataAttributeTrait: Form data storage
 * - EventHandlerTrait: Form event binding
 *
 * Usage:
 *   $form = HtmlElement::form('POST', '/submit')
 *       ->addChild(HtmlElement::input('email', 'email')->setRequired(true))
 *       ->addChild(HtmlElement::button('Submit', 'submit'));
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0
 */
trait FormElementsTrait
{
    /**
     * Create a form element
     *
     * @param string $method HTTP method (GET, POST, etc.)
     * @param string|null $action Form action URL
     * @return HtmlElement
     *
     * @example
     *   $form = HtmlElement::form('POST', '/submit');
     */
    public static function form(string $method = 'POST', ?string $action = null): HtmlElement
    {
        $form = new self('form');
        $form->setAttribute('method', strtoupper($method));
        
        if ($action !== null) {
            $form->setAttribute('action', $action);
        }
        
        return $form;
    }

    /**
     * Create an input element
     *
     * @param string $type Input type (text, email, password, etc.)
     * @param string $name Input name attribute
     * @return HtmlElement
     *
     * @example
     *   $email = HtmlElement::input('email', 'user_email');
     *   $password = HtmlElement::input('password', 'pwd')->setRequired(true);
     */
    public static function input(string $type = 'text', string $name = ''): HtmlElement
    {
        $input = new self('input');
        $input->setAttribute('type', $type);
        
        if ($name !== '') {
            $input->setAttribute('name', $name);
        }
        
        return $input;
    }

    /**
     * Create a textarea element
     *
     * @param string $name Textarea name attribute
     * @param string|null $placeholder Optional placeholder text
     * @return HtmlElement
     *
     * @example
     *   $comments = HtmlElement::textarea('comments', 'Your feedback...');
     */
    public static function textarea(string $name = '', ?string $placeholder = null): HtmlElement
    {
        $textarea = new self('textarea');
        
        if ($name !== '') {
            $textarea->setAttribute('name', $name);
        }
        
        if ($placeholder !== null) {
            $textarea->setAttribute('placeholder', $placeholder);
        }
        
        return $textarea;
    }

    /**
     * Create a select element
     *
     * @param string $name Select name attribute
     * @return HtmlElement
     *
     * @example
     *   $country = HtmlElement::select('country')
     *       ->addOption('us', 'United States')
     *       ->addOption('ca', 'Canada');
     */
    public static function select(string $name = ''): HtmlElement
    {
        $select = new self('select');
        
        if ($name !== '') {
            $select->setAttribute('name', $name);
        }
        
        return $select;
    }

    /**
     * Create a label element
     *
     * @param string $text Label text
     * @param string|null $for ID of associated form element
     * @return HtmlElement
     *
     * @example
     *   $label = HtmlElement::label('Email Address', 'email_field');
     */
    public static function label(string $text = '', ?string $for = null): HtmlElement
    {
        $label = new self('label', $text);
        
        if ($for !== null) {
            $label->setAttribute('for', $for);
        }
        
        return $label;
    }

    /**
     * Create a button element
     *
     * @param string $text Button text/label
     * @param string $type Button type (submit, button, reset)
     * @return HtmlElement
     *
     * @example
     *   $submit = HtmlElement::button('Submit', 'submit');
     *   $cancel = HtmlElement::button('Cancel', 'button');
     */
    public static function button(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = new self('button', $text);
        $button->setAttribute('type', $type);
        
        return $button;
    }

    /**
     * Create a fieldset element
     *
     * @return HtmlElement
     *
     * @example
     *   $fieldset = HtmlElement::fieldset()
     *       ->setLegend('Account Details');
     */
    public static function fieldset(): HtmlElement
    {
        return new self('fieldset');
    }

    /**
     * Create a form group wrapper (div with form-group class)
     *
     * Commonly used to group label + input + feedback together
     *
     * @return HtmlElement
     *
     * @example
     *   $group = HtmlElement::formGroup()
     *       ->addChild(HtmlElement::label('Name', 'name'))
     *       ->addChild(HtmlElement::input('text', 'name'));
     */
    public static function formGroup(): HtmlElement
    {
        $group = new self('div');
        $group->addCSSClass('form-group');
        
        return $group;
    }

    /**
     * Create an input group wrapper (for Bootstrap-style input groups)
     *
     * @return HtmlElement
     *
     * @example
     *   $group = HtmlElement::inputGroup()
     *       ->addPrefix('$')
     *       ->addChild(HtmlElement::input('number', 'amount'))
     *       ->addSuffix('.00');
     */
    public static function inputGroup(): HtmlElement
    {
        $group = new self('div');
        $group->addCSSClass('input-group');
        
        return $group;
    }

    /**
     * Create validation feedback element (Bootstrap-style)
     *
     * @param string $message Feedback message text
     * @param bool $isInvalid True for invalid feedback, false for valid
     * @return HtmlElement
     *
     * @example
     *   $feedback = HtmlElement::validationFeedback('This field is required', true);
     */
    public static function validationFeedback(string $message = '', bool $isInvalid = true): HtmlElement
    {
        $feedback = new self('div', $message);
        $class = $isInvalid ? 'invalid-feedback' : 'valid-feedback';
        $feedback->addCSSClass($class);
        $feedback->addCSSClass('d-none'); // Hidden by default
        
        return $feedback;
    }

    // ========================================================================
    // INSTANCE METHODS FOR CONFIGURATION
    // ========================================================================

    /**
     * Set input value
     *
     * @param string $value Input value
     * @return self
     *
     * @example
     *   $input->setInputValue('user@example.com');
     */
    public function setInputValue(string $value): self
    {
        $this->setAttribute('value', $value);
        return $this;
    }

    /**
     * Set placeholder text
     *
     * @param string $text Placeholder text
     * @return self
     *
     * @example
     *   $input->setPlaceholder('Enter your email...');
     */
    public function setPlaceholder(string $text): self
    {
        $this->setAttribute('placeholder', $text);
        return $this;
    }

    /**
     * Set required attribute
     *
     * @param bool $required Whether field is required
     * @return self
     *
     * @example
     *   $input->setRequired(true);
     */
    public function setRequired(bool $required = true): self
    {
        if ($required) {
            $this->setAttribute('required', 'required');
        } else {
            $this->removeAttribute('required');
        }
        return $this;
    }

    /**
     * Set disabled attribute
     *
     * @param bool $disabled Whether field is disabled
     * @return self
     *
     * @example
     *   $input->setDisabled(true);
     */
    public function setDisabled(bool $disabled = true): self
    {
        if ($disabled) {
            $this->setAttribute('disabled', 'disabled');
        } else {
            $this->removeAttribute('disabled');
        }
        return $this;
    }

    /**
     * Set readonly attribute
     *
     * @param bool $readonly Whether field is readonly
     * @return self
     *
     * @example
     *   $input->setReadonly(true);
     */
    public function setReadonly(bool $readonly = true): self
    {
        if ($readonly) {
            $this->setAttribute('readonly', 'readonly');
        } else {
            $this->removeAttribute('readonly');
        }
        return $this;
    }

    /**
     * Set autocomplete attribute
     *
     * @param string $value Autocomplete value (email, name, off, etc.)
     * @return self
     *
     * @example
     *   $input->setAutocomplete('email');
     */
    public function setAutocomplete(string $value): self
    {
        $this->setAttribute('autocomplete', $value);
        return $this;
    }

    /**
     * Set pattern attribute (HTML5 regex)
     *
     * @param string $pattern Regex pattern
     * @return self
     *
     * @example
     *   $input->setPattern('[0-9]{3}-[0-9]{4}');
     */
    public function setPattern(string $pattern): self
    {
        $this->setAttribute('pattern', $pattern);
        return $this;
    }

    /**
     * Set maxlength attribute
     *
     * @param int $length Maximum length
     * @return self
     *
     * @example
     *   $input->setMaxLength(100);
     */
    public function setMaxLength(int $length): self
    {
        $this->setAttribute('maxlength', (string)$length);
        return $this;
    }

    /**
     * Set minlength attribute
     *
     * @param int $length Minimum length
     * @return self
     *
     * @example
     *   $input->setMinLength(8);
     */
    public function setMinLength(int $length): self
    {
        $this->setAttribute('minlength', (string)$length);
        return $this;
    }

    /**
     * Mark field as invalid (Bootstrap)
     *
     * @return self
     *
     * @example
     *   $input->markInvalid();
     */
    public function markInvalid(): self
    {
        $this->removeCSSClass('is-valid');
        $this->addCSSClass('is-invalid');
        return $this;
    }

    /**
     * Mark field as valid (Bootstrap)
     *
     * @return self
     *
     * @example
     *   $input->markValid();
     */
    public function markValid(): self
    {
        $this->removeCSSClass('is-invalid');
        $this->addCSSClass('is-valid');
        return $this;
    }

    /**
     * Set textarea rows
     *
     * @param int $rows Number of rows
     * @return self
     *
     * @example
     *   $textarea->setRows(5);
     */
    public function setRows(int $rows): self
    {
        $this->setAttribute('rows', (string)$rows);
        return $this;
    }

    /**
     * Set textarea columns
     *
     * @param int $cols Number of columns
     * @return self
     *
     * @example
     *   $textarea->setCols(40);
     */
    public function setCols(int $cols): self
    {
        $this->setAttribute('cols', (string)$cols);
        return $this;
    }

    /**
     * Add option to select element
     *
     * @param string $value Option value
     * @param string $text Option display text
     * @param bool $selected Whether option is selected
     * @return self
     *
     * @example
     *   $select->addOption('us', 'United States');
     */
    public function addOption(string $value, string $text = '', bool $selected = false): self
    {
        $option = new self('option', $text !== '' ? $text : $value);
        $option->setAttribute('value', $value);
        
        if ($selected) {
            $option->setAttribute('selected', 'selected');
        }
        
        $this->addNested($option);
        return $this;
    }

    /**
     * Set selected value in select element
     *
     * @param string $value Value to select
     * @return self
     *
     * @example
     *   $select->setSelectedValue('us');
     */
    public function setSelectedValue(string $value): self
    {
        $this->setAttribute('data-selected', $value);
        return $this;
    }

    /**
     * Set checked state for checkbox/radio
     *
     * @param bool $checked Whether to check
     * @return self
     *
     * @example
     *   $checkbox->setChecked(true);
     */
    public function setChecked(bool $checked = true): self
    {
        if ($checked) {
            $this->setAttribute('checked', 'checked');
        } else {
            $this->removeAttribute('checked');
        }
        return $this;
    }

    /**
     * Set fieldset legend
     *
     * @param string $text Legend text
     * @return self
     *
     * @example
     *   $fieldset->setLegend('Personal Information');
     */
    public function setLegend(string $text): self
    {
        $this->setAttribute('data-legend', $text);
        return $this;
    }

    /**
     * Add prefix to input group
     *
     * @param string $text Prefix text/symbol
     * @return self
     *
     * @example
     *   $group->addPrefix('$');
     */
    public function addPrefix(string $text): self
    {
        $prefix = new self('span', $text);
        $prefix->addCSSClass('input-group-text');
        $nested = $this->nested ?? [];
        array_unshift($nested, $prefix);
        $this->nested = $nested;
        return $this;
    }

    /**
     * Add suffix to input group
     *
     * @param string $text Suffix text/symbol
     * @return self
     *
     * @example
     *   $group->addSuffix('.00');
     */
    public function addSuffix(string $text): self
    {
        $suffix = new self('span', $text);
        $suffix->addCSSClass('input-group-text');
        $this->addNested($suffix);
        return $this;
    }

    /**
     * Show/hide validation feedback
     *
     * @param bool $show Whether to show feedback
     * @return self
     *
     * @example
     *   $feedback->showFeedback(true);
     */
    public function showFeedback(bool $show = true): self
    {
        if ($show) {
            $this->removeCSSClass('d-none');
            $this->addCSSClass('d-block');
        } else {
            $this->removeCSSClass('d-block');
            $this->addCSSClass('d-none');
        }
        return $this;
    }

    /**
     * Mark form as needing validation
     *
     * @return self
     *
     * @example
     *   $form->markNeedsValidation();
     */
    public function markNeedsValidation(): self
    {
        $this->addCSSClass('needs-validation');
        return $this;
    }

    /**
     * Prevent default form submission
     *
     * @return self
     *
     * @example
     *   $form->preventDefaultSubmit();
     */
    public function preventDefaultSubmit(): self
    {
        $this->addCSSClass('prevent-default');
        return $this;
    }

    /**
     * Add child element to form/group
     *
     * @param HtmlElementInterface $element Child element
     * @return self
     *
     * @example
     *   $group->addChild($input);
     */
    public function addChild(HtmlElementInterface $element): self
    {
        $this->addNested($element);
        return $this;
    }
}
