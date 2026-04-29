<?php

namespace Ksfraser\HTML\Traits;

/**
 * AriaAttributeTrait - FR-009
 * Provides convenient methods for managing ARIA (Accessible Rich Internet Applications) attributes
 *
 * ARIA attributes help make dynamic Web content and advanced user interface controls 
 * accessible to people with disabilities.
 *
 * Usage:
 *   $element->setAriaLabel('Close dialog');
 *   $element->setRole('button');
 *   $button->setAriaDisabled(true);
 *   
 *   $element
 *       ->setAriaLabel('Menu')
 *       ->setRole('navigation')
 *       ->setAriaExpanded(false);
 *
 * @package Ksfraser\HTML\Traits
 * @link https://www.w3.org/WAI/ARIA/apg/
 * @since 1.0
 */
trait AriaAttributeTrait
{
    /**
     * Storage for ARIA attributes
     * Format: ['name' => $value, ...]  (without 'aria-' prefix)
     *
     * @var array $ariaAttributes
     */
    protected array $ariaAttributes = [];

    /**
     * Set aria-label attribute
     *
     * Provides an accessible label or description for the element.
     *
     * @param string $label The label text
     * @return self Returns $this for method chaining
     */
    public function setAriaLabel(string $label): self
    {
        return $this->setAria('label', $label);
    }

    /**
     * Set role attribute
     *
     * Defines the role of the element for accessibility (e.g., 'button', 'navigation', 'dialog')
     *
     * @param string $role The role name
     * @return self Returns $this for method chaining
     */
    public function setRole(string $role): self
    {
        $this->ariaAttributes['role'] = $role;
        return $this;
    }

    /**
     * Set aria-describedby attribute
     *
     * References an element that provides an extended description.
     *
     * @param string $id The ID of the describing element
     * @return self Returns $this for method chaining
     */
    public function setAriaDescribedBy(string $id): self
    {
        return $this->setAria('describedby', $id);
    }

    /**
     * Set aria-labelledby attribute
     *
     * References one or more elements that provide a label for this element.
     *
     * @param string $id The ID(s) of the labeling element(s)
     * @return self Returns $this for method chaining
     */
    public function setAriaLabelledBy(string $id): self
    {
        return $this->setAria('labelledby', $id);
    }

    /**
     * Set aria-hidden attribute
     *
     * Hides the element from accessibility tools.
     *
     * @param bool $hidden Whether the element is hidden
     * @return self Returns $this for method chaining
     */
    public function setAriaHidden(bool $hidden): self
    {
        return $this->setAria('hidden', $hidden ? 'true' : 'false');
    }

    /**
     * Set aria-disabled attribute
     *
     * Indicates the element is disabled.
     *
     * @param bool $disabled Whether the element is disabled
     * @return self Returns $this for method chaining
     */
    public function setAriaDisabled(bool $disabled): self
    {
        return $this->setAria('disabled', $disabled ? 'true' : 'false');
    }

    /**
     * Set aria-pressed attribute
     *
     * Indicates if a toggle button (like a toolbar button) is pressed.
     * Can be boolean true/false or 'mixed' for indeterminate state.
     *
     * @param bool|string $pressed The pressed state: true, false, or 'mixed'
     * @return self Returns $this for method chaining
     */
    public function setAriaPressed(bool|string $pressed): self
    {
        $value = is_bool($pressed) ? ($pressed ? 'true' : 'false') : $pressed;
        return $this->setAria('pressed', $value);
    }

    /**
     * Set aria-checked attribute
     *
     * Indicates the state of a checkbox, radio button, or similar widget.
     * Can be true, false, or 'mixed' for indeterminate state.
     *
     * @param bool|string $checked The checked state: true, false, or 'mixed'
     * @return self Returns $this for method chaining
     */
    public function setAriaChecked(bool|string $checked): self
    {
        $value = is_bool($checked) ? ($checked ? 'true' : 'false') : $checked;
        return $this->setAria('checked', $value);
    }

    /**
     * Set aria-selected attribute
     *
     * Indicates the current selected state of a selectable widget.
     *
     * @param bool $selected Whether the element is selected
     * @return self Returns $this for method chaining
     */
    public function setAriaSelected(bool $selected): self
    {
        return $this->setAria('selected', $selected ? 'true' : 'false');
    }

    /**
     * Set aria-expanded attribute
     *
     * Indicates whether the element is expanded or collapsed.
     *
     * @param bool $expanded Whether the element is expanded
     * @return self Returns $this for method chaining
     */
    public function setAriaExpanded(bool $expanded): self
    {
        return $this->setAria('expanded', $expanded ? 'true' : 'false');
    }

    /**
     * Set aria-busy attribute
     *
     * Indicates that the element is being modified and updates should be expected.
     *
     * @param bool $busy Whether the element is busy
     * @return self Returns $this for method chaining
     */
    public function setAriaBusy(bool $busy): self
    {
        return $this->setAria('busy', $busy ? 'true' : 'false');
    }

    /**
     * Set aria-modal attribute
     *
     * Indicates that the element is a modal dialog.
     *
     * @param bool $modal Whether the element is modal
     * @return self Returns $this for method chaining
     */
    public function setAriaModal(bool $modal): self
    {
        return $this->setAria('modal', $modal ? 'true' : 'false');
    }

    /**
     * Set aria-live attribute
     *
     * Indicates that an element will be updated and describes the type of update 
     * ('off', 'polite', 'assertive').
     *
     * @param string $live The politeness level: 'off', 'polite', or 'assertive'
     * @return self Returns $this for method chaining
     */
    public function setAriaLive(string $live): self
    {
        return $this->setAria('live', $live);
    }

    /**
     * Set aria-atomic attribute
     *
     * Indicates whether assistive technologies should present all or only changed areas
     * in a live region.
     *
     * @param bool $atomic Whether to treat live region atomically
     * @return self Returns $this for method chaining
     */
    public function setAriaAtomic(bool $atomic): self
    {
        return $this->setAria('atomic', $atomic ? 'true' : 'false');
    }

    /**
     * Set aria-relevant attribute
     *
     * Indicates which notifications are relevant when the element is modified.
     *
     * @param string $relevant Space-separated list: 'additions', 'removals', 'text', 'all'
     * @return self Returns $this for method chaining
     */
    public function setAriaRelevant(string $relevant): self
    {
        return $this->setAria('relevant', $relevant);
    }

    /**
     * Set aria-owns attribute
     *
     * Indicates the element owns other elements/IDs in the accessibility tree.
     *
     * @param string $ids Space-separated IDs owned by this element
     * @return self Returns $this for method chaining
     */
    public function setAriaOwns(string $ids): self
    {
        return $this->setAria('owns', $ids);
    }

    /**
     * Set aria-activedescendant attribute
     *
     * Identifies the currently active element in a composite widget.
     *
     * @param string $id The ID of the active descendant
     * @return self Returns $this for method chaining
     */
    public function setAriaActivedescendant(string $id): self
    {
        return $this->setAria('activedescendant', $id);
    }

    /**
     * Set aria-flowto attribute
     *
     * Identifies the next element or elements to which reading should continue.
     *
     * @param string $ids Space-separated IDs of elements reading should flow to
     * @return self Returns $this for method chaining
     */
    public function setAriaFlowto(string $ids): self
    {
        return $this->setAria('flowto', $ids);
    }

    /**
     * Set aria-valuemin attribute
     *
     * Defines the minimum allowed value for a range widget.
     *
     * @param int|float $value The minimum value
     * @return self Returns $this for method chaining
     */
    public function setAriaValuemin(int|float $value): self
    {
        return $this->setAria('valuemin', (string)$value);
    }

    /**
     * Set aria-valuemax attribute
     *
     * Defines the maximum allowed value for a range widget.
     *
     * @param int|float $value The maximum value
     * @return self Returns $this for method chaining
     */
    public function setAriaValuemax(int|float $value): self
    {
        return $this->setAria('valuemax', (string)$value);
    }

    /**
     * Set aria-valuenow attribute
     *
     * Defines the current value for a range widget.
     *
     * @param int|float $value The current value
     * @return self Returns $this for method chaining
     */
    public function setAriaValuenow(int|float $value): self
    {
        return $this->setAria('valuenow', (string)$value);
    }

    /**
     * Set aria-valuetext attribute
     *
     * Provides a human-readable text representation of the aria-valuenow value.
     *
     * @param string $text The text representation of the value
     * @return self Returns $this for method chaining
     */
    public function setAriaValuetext(string $text): self
    {
        return $this->setAria('valuetext', $text);
    }

    /**
     * Set aria-placeholder attribute
     *
     * Provides a short hint about the expected value for an input field.
     *
     * @param string $placeholder The placeholder text
     * @return self Returns $this for method chaining
     */
    public function setAriaPlaceholder(string $placeholder): self
    {
        return $this->setAria('placeholder', $placeholder);
    }

    /**
     * Set aria-orientation attribute
     *
     * Indicates whether the element's orientation is horizontal or vertical.
     *
     * @param string $orientation 'horizontal' or 'vertical'
     * @return self Returns $this for method chaining
     */
    public function setAriaOrientation(string $orientation): self
    {
        return $this->setAria('orientation', $orientation);
    }

    /**
     * Set aria-multiline attribute
     *
     * Indicates that a textbox accepts multiple lines of input.
     *
     * @param bool $multiline Whether the textbox is multiline
     * @return self Returns $this for method chaining
     */
    public function setAriaMultiline(bool $multiline): self
    {
        return $this->setAria('multiline', $multiline ? 'true' : 'false');
    }

    /**
     * Set aria-readonly attribute
     *
     * Indicates the element is not editable.
     *
     * @param bool $readonly Whether the element is read-only
     * @return self Returns $this for method chaining
     */
    public function setAriaReadonly(bool $readonly): self
    {
        return $this->setAria('readonly', $readonly ? 'true' : 'false');
    }

    /**
     * Set aria-required attribute
     *
     * Indicates that user input is required.
     *
     * @param bool $required Whether input is required
     * @return self Returns $this for method chaining
     */
    public function setAriaRequired(bool $required): self
    {
        return $this->setAria('required', $required ? 'true' : 'false');
    }

    /**
     * Set a generic ARIA attribute
     *
     * @param string $name The attribute name (without 'aria-' prefix)
     * @param string $value The attribute value
     *
     * @return self Returns $this for method chaining
     *
     * @example
     *   $element->setAria('custom-attribute', 'value');
     *   // Renders: aria-custom-attribute="value"
     */
    public function setAria(string $name, string $value): self
    {
        if (!empty($name)) {
            $this->ariaAttributes[$name] = $value;
        }
        return $this;
    }

    /**
     * Conditionally set an ARIA attribute.
     * When $condition is false the call is a no-op.
     *
     * @param bool   $condition Set the attribute only when this is true
     * @param string $name      Attribute name (without 'aria-' prefix)
     * @param string $value     Attribute value
     * @return self
     */
    public function setAriaIf(bool $condition, string $name, string $value): self
    {
        if ($condition) {
            $this->setAria($name, $value);
        }
        return $this;
    }

    /**
     * Get an ARIA attribute value
     *
     * @param string $name The attribute name (without 'aria-' prefix)
     *
     * @return string|null The attribute value, or null if not found
     */
    public function getAria(string $name): ?string
    {
        return $this->ariaAttributes[$name] ?? null;
    }

    /**
     * Check if an ARIA attribute exists
     *
     * @param string $name The attribute name (without 'aria-' prefix)
     *
     * @return bool True if the attribute exists, false otherwise
     */
    public function hasAria(string $name): bool
    {
        return isset($this->ariaAttributes[$name]);
    }

    /**
     * Remove an ARIA attribute
     *
     * @param string $name The attribute name (without 'aria-' prefix)
     *
     * @return self Returns $this for method chaining
     */
    public function removeAria(string $name): self
    {
        unset($this->ariaAttributes[$name]);
        return $this;
    }

    /**
     * Remove all ARIA attributes
     *
     * @return self Returns $this for method chaining
     */
    public function clearAria(): self
    {
        $this->ariaAttributes = [];
        return $this;
    }

    /**
     * Get all ARIA attributes as an associative array
     *
     * @return array All ARIA attributes without 'aria-' prefix
     */
    public function getAllAria(): array
    {
        return $this->ariaAttributes;
    }

    /**
     * Render ARIA attributes as HTML attribute string
     *
     * Internal method called from HtmlElement::getAttributes().
     * Transforms stored ARIA attributes into HTML-safe attribute format.
     * Role attribute is rendered as role="..." instead of aria-role="..."
     *
     * Special handling:
     * - 'role' renders as role="..." (not aria-role="...")
     * - Other ARIA attributes render as aria-name="..."
     * - All values are HTML-escaped for security
     *
     * @return string HTML attribute string, empty string if no ARIA attributes
     *
     * @internal Called from HtmlElement::getAttributes()
     */
    protected function renderAriaAttributes(): string
    {
        if (empty($this->ariaAttributes)) {
            return '';
        }

        $attributes = [];

        foreach ($this->ariaAttributes as $name => $value) {
            // Check for empty string specifically (0 is valid, empty string is not)
            if ($value === '' || $value === null) {
                continue;
            }

            // Special handling for 'role' attribute
            if ($name === 'role') {
                $attributeName = 'role';
            } else {
                $attributeName = 'aria-' . $name;
            }

            $escaped = htmlspecialchars((string)$value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $attributes[] = "{$attributeName}=\"{$escaped}\"";
        }

        if (empty($attributes)) {
            return '';
        }

        return ' ' . implode(' ', $attributes);
    }
}
