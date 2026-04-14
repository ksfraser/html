<?php

namespace Ksfraser\HTML\Traits;

/**

 * AriaAttributeTrait - FR-009

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

 * Provides convenient methods for managing ARIA (Accessible Rich Internet Applications) attributes

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * ARIA attributes help make dynamic Web content and advanced user interface controls

 * 

 * 

 * 

 * accessible to people with disabilities.

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

 *   $element->setAriaLabel('Close dialog');

 * 

 * 

 * 

 *   $element->setRole('button');

 * 

 * 

 * 

 *   $button->setAriaDisabled(true);

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *   $element

 * 

 * 

 * 

 *       ->setAriaLabel('Menu')

 * 

 * 

 * 

 *       ->setRole('navigation')

 * 

 * 

 * 

 *       ->setAriaExpanded(false);

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

 *

 * @since 1.0.5 2026-03-30

 * @package Ksfraser\HTML\Traits

 * @link https://www.w3.org/WAI/ARIA/apg/

 * @return void

 */
trait AriaAttributeTrait
{
    /**
     * Storage for ARIA attributes
     *
     * 
     * 
     * Format: ['name' => $value, ...]  (without 'aria-' prefix)
     * 
     * 
     * 
     *
     * @var array $ariaAttributes
     * @return void
     */
    protected array $ariaAttributes = [];

    /**

     * Set aria-label attribute

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

     * Provides an accessible label or description for the element.

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

     * @since 1.0.5 2026-03-30

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

     * Defines the role of the element for accessibility (e.g., 'button', 'navigation', 'dialog')

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

     * @since v1.0.0 2026-04-13

     * @param string $role The role name

     * @return self Returns $this for method chaining

     */
    public function setRole(string $role): self
    {
        return $this->setAria('role', $role);
    }

    /**

     * Generic setter for ARIA attributes (without 'aria-' prefix)

     *

     * @since v1.0.0 2026-04-13

     * @param string $name Attribute name without 'aria-' prefix

     * @param mixed $value Attribute value

     * @return self

     */
    public function setAria(string $name, $value): self
    {
        $this->ariaAttributes[$name] = $value;
        return $this;
    }

    /**

     * Get an ARIA attribute value by name (without 'aria-' prefix)

     *

     * @since 1.0.5 2026-03-30

     * @param string $name Attribute name without 'aria-' prefix

     * @return mixed|null The attribute value or null if not set

     */
    public function getAria(string $name)
    {
        $key = strtolower($name);
        return $this->ariaAttributes[$key] ?? null;
    }

    /**

     * Check if an ARIA attribute exists

     *

     * @since 1.0.5 2026-03-30

     * @param string $name Attribute name without 'aria-' prefix

     * @return bool True if attribute exists

     */
    public function hasAria(string $name): bool
    {
        $key = strtolower($name);
        return array_key_exists($key, $this->ariaAttributes);
    }

    /**

     * Get all ARIA attributes as an associative array (without 'aria-' prefix)

     *

     * @since 1.0.5 2026-03-30

     * @return array

     */
    public function getAllAria(): array
    {
        return $this->ariaAttributes;
    }

    /**

     * Remove an ARIA attribute

     *

     * @since 1.0.5 2026-03-30

     * @param string $name Attribute name without 'aria-' prefix

     * @return self

     */
    public function removeAria(string $name): self
    {
        $key = strtolower($name);
        if (isset($this->ariaAttributes[$key])) {
            unset($this->ariaAttributes[$key]);
        }
        return $this;
    }

    /**

     * Clear all ARIA attributes

     *

     * @since 1.0.5 2026-03-30

     * @return self

     */
    public function clearAria(): self
    {
        $this->ariaAttributes = [];
        return $this;
    }

    /**

     * Render ARIA attributes and role attribute as a string for inclusion in HTML

     *

     * @since 1.0.5 2026-03-30

     * @return string Rendered attributes (e.g. 'role="button" aria-hidden="true"')

     */
    public function renderAriaAttributes(): string
    {
        if (empty($this->ariaAttributes)) {
            return '';
        }

        $parts = [];
        foreach ($this->ariaAttributes as $key => $value) {
            if ($key === 'role') {
                $attrName = 'role';
            } else {
                $attrName = 'aria-' . $key;
            }

            if (is_bool($value)) {
                $val = $value ? 'true' : 'false';
            } elseif ($value === null) {
                continue;
            } else {
                $val = (string)$value;
            }

            $parts[] = $attrName . '="' . htmlspecialchars($val, ENT_QUOTES, 'UTF-8') . '"';
        }

        return implode(' ', $parts);
    }

    /**

     * Convenience setters used across tests and callers.

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

     * Each maps to {@see setAria()} with the attribute name (without 'aria-' prefix).

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

     * @since 1.0.5 2026-03-30

     * @param string $id

     * @return self

     */
    public function setAriaDescribedBy(string $id): self { return $this->setAria('describedby', $id); }
/**
 * setAriaDisabled
 *
 * @since 1.0.5 2026-03-30
 * @param bool $v
 * @return self
 */
    public function setAriaDisabled(bool $v): self { return $this->setAria('disabled', $v); }
/**
 * setAriaPressed
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaPressed($v): self { return $this->setAria('pressed', $v); }
/**
 * setAriaChecked
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaChecked($v): self { return $this->setAria('checked', $v); }
/**
 * setAriaSelected
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaSelected($v): self { return $this->setAria('selected', $v); }
/**
 * setAriaExpanded
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaExpanded($v): self { return $this->setAria('expanded', $v); }
/**
 * setAriaBusy
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaBusy($v): self { return $this->setAria('busy', $v); }
/**
 * setAriaModal
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaModal($v): self { return $this->setAria('modal', $v); }
/**
 * setAriaLive
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaLive(string $v): self { return $this->setAria('live', $v); }
/**
 * setAriaAtomic
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaAtomic($v): self { return $this->setAria('atomic', $v); }
/**
 * setAriaRelevant
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaRelevant(string $v): self { return $this->setAria('relevant', $v); }
/**
 * setAriaLabelledBy
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaLabelledBy(string $v): self { return $this->setAria('labelledby', $v); }
/**
 * setAriaOwns
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaOwns(string $v): self { return $this->setAria('owns', $v); }
/**
 * setAriaActivedescendant
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaActivedescendant(string $v): self { return $this->setAria('activedescendant', $v); }
/**
 * setAriaFlowto
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaFlowto(string $v): self { return $this->setAria('flowto', $v); }
/**
 * setAriaValuemin
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaValuemin($v): self { return $this->setAria('valuemin', $v); }
/**
 * setAriaValuemax
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaValuemax($v): self { return $this->setAria('valuemax', $v); }
/**
 * setAriaValuenow
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaValuenow($v): self { return $this->setAria('valuenow', $v); }
/**
 * setAriaValuetext
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaValuetext(string $v): self { return $this->setAria('valuetext', $v); }
/**
 * setAriaPlaceholder
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaPlaceholder(string $v): self { return $this->setAria('placeholder', $v); }
/**
 * setAriaOrientation
 *
 * @since 1.0.5 2026-03-30
 * @param string $v
 * @return self
 */
    public function setAriaOrientation(string $v): self { return $this->setAria('orientation', $v); }
/**
 * setAriaMultiline
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaMultiline($v): self { return $this->setAria('multiline', $v); }
/**
 * setAriaReadonly
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaReadonly($v): self { return $this->setAria('readonly', $v); }
/**
 * setAriaRequired
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaRequired($v): self { return $this->setAria('required', $v); }
/**
 * setAriaHidden
 *
 * @since 1.0.5 2026-03-30
 * @param mixed $v
 * @return self
 */
    public function setAriaHidden($v): self { return $this->setAria('hidden', $v); }
}
