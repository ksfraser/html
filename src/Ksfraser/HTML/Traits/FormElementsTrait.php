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
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0.5 2026-03-30
 */
trait FormElementsTrait
{
    /**
     * Create a form element
     *
     * @return HtmlElement
     *
     * @example
     *   $form = HtmlElement::form('POST', '/submit');
 * @param string $method
 * @param ?string $action
 * @since 1.0.5 2026-03-30
     */
    public static function form(string $method = 'POST', ?string $action = null): HtmlElement
    {
        $form = self::element('form');
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
 * @since v1.0.0 2026-04-13
     */
    public static function input(string $type = 'text', string $name = ''): HtmlElement
    {
        $input = self::element('input');
        if (method_exists($input, 'setType')) {
            $input->setType($type);
        } else {
            $input->setAttribute('type', $type);
        }

        if ($name !== '') {
            if (method_exists($input, 'setName')) {
                $input->setName($name);
            } else {
                $input->setAttribute('name', $name);
            }
        }

        return $input;
    }

    /**
     * Create a textarea element
     *
     * @return HtmlElement
     *
     * @example
     *   $comments = HtmlElement::textarea('comments', 'Your feedback...');
 * @param string $name
 * @param ?string $placeholder
 * @since v2.0.1 2026-04-14
     */
    public static function textarea(string $name = '', ?string $placeholder = null): HtmlElement
    {
        $textarea = self::element('textarea');

        if ($name !== '') {
            if (method_exists($textarea, 'setName')) {
                $textarea->setName($name);
            } else {
                $textarea->setAttribute('name', $name);
            }
        }

        if ($placeholder !== null) {
            if (method_exists($textarea, 'setPlaceholder')) {
                $textarea->setPlaceholder($placeholder);
            } else {
                $textarea->setAttribute('placeholder', $placeholder);
            }
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
 * @since v1.0.0 2026-04-13
     */
    public static function select(string $name = ''): HtmlElement
    {
        $select = self::element('select');

        if ($name !== '') {
            if (method_exists($select, 'setName')) {
                $select->setName($name);
            } else {
                $select->setAttribute('name', $name);
            }
        }

        return $select;
    }

    /**
     * Create a label element
     *
     * @return HtmlElement
     *
     * @example
     *   $label = HtmlElement::label('Email Address', 'email_field');
 * @param string $text
 * @param ?string $for
 * @since v2.0.1 2026-04-14
     */
    public static function label(string $text = '', ?string $for = null): HtmlElement
    {
        $label = self::element('label', $text);

        if ($for !== null) {
            if (method_exists($label, 'setFor')) {
                $label->setFor($for);
            } else {
                $label->setAttribute('for', $for);
            }
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
 * @since v1.0.0 2026-04-13
     */
    public static function button(string $text = '', string $type = 'button'): HtmlElement
    {
        $button = self::element('button', $text);
        if (method_exists($button, 'setType')) {
            $button->setType($type);
        } else {
            $button->setAttribute('type', $type);
        }

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
    // `fieldset()` factory moved to SemanticElementsTrait to avoid duplication

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
 * @since v1.0.0 2026-04-13
     */
    public static function formGroup(): HtmlElement
    {
        $group = self::element('div');
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
 * @since v1.0.0 2026-04-13
     */
    public static function inputGroup(): HtmlElement
    {
        $group = self::element('div');
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
 * @since v1.0.0 2026-04-13
     */
    public static function validationFeedback(string $message = '', bool $isInvalid = true): HtmlElement
    {
        $feedback = self::element('div', $message);
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
     */
    public function addOption(string $value, string $text = '', bool $selected = false): self
    {
        $option = self::element('option', $text !== '' ? $text : $value);
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
     */
    public function addPrefix(string $text): self
    {
        $prefix = self::element('span', $text);
        $prefix->addCSSClass('input-group-text');
        if (!isset($this->nested) || !is_array($this->nested)) {
            $this->nested = [];
        }
        array_unshift($this->nested, $prefix);
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
 * @since v1.0.0 2026-04-13
     */
    public function addSuffix(string $text): self
    {
        $suffix = self::element('span', $text);
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
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
 * @since v1.0.0 2026-04-13
     */
    public function addChild(HtmlElementInterface $element): self
    {
        $this->addNested($element);
        return $this;
    }
}
