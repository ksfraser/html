<?php
/**
 * CSSManagementTrait - Enhanced CSS Class Management
 *
 * 
 * 
 * 
 * Provides convenient methods for managing CSS classes beyond basic setAttribute.
 * Features: batch operations, conditional classes, removal, toggling, deduplication
 * 
 * Implements FR-006: Enhanced CSS Class Management
 * 
 * 
 * 
 *
 * @since 2026-03-27
 * @author Kevin Fraser
 * @return void
 */

namespace Ksfraser\HTML\Traits;

/**

 * Trait for managing CSS classes with convenience methods

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

 * Methods:

 * 

 * 

 * 

 * - addCSSClass(string, bool?) - Add single class with optional condition

 * 

 * 

 * 

 * - addCSSClasses(array) - Add multiple classes at once

 * 

 * 

 * 

 * - removeCSSClass(string) - Remove a class

 * 

 * 

 * 

 * - toggleCSSClass(string, bool?) - Toggle class on/off

 * 

 * 

 * 

 * - hasCSSClass(string) - Check if class exists

 * 

 * 

 * 

 * - getCSSClasses() - Get all classes as array

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

 * @return void

 */
trait CSSManagementTrait
{
    /**
     * Valid CSS class name pattern
     *
     * 
     * 
     * Classes must not contain spaces, special characters, etc.
     * Pattern: valid letters, digits, hyphens, underscores
     * 
     * 
     * 
     *
     * @const string
     * @return void
     */
    protected const CSS_CLASS_PATTERN = '/^[a-zA-Z0-9_-]+$/';

    /**

     * Add a single CSS class to the element

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

     * Supports conditional addition based on boolean flag.

     * 

     * 

     * 

     * Returns $this for method chaining.

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

     * $div->addCSSClass('btn');

     * 

     * 

     * 

     * $div->addCSSClass('active', $isActive);

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

     * @throws \InvalidArgumentException if class name is invalid

     * @example 

     * @param string $class Class name to add

     * @param bool $condition Optional condition (default: true)

     * @return self

     */
    public function addCSSClass(string $class, bool $condition = true): self
    {
        // Skip if condition is false or class is empty/whitespace
        if (!$condition || empty(trim($class))) {
            return $this;
        }

        // Trim the class name
        $class = trim($class);

        // Validate class name format
        if (!preg_match(self::CSS_CLASS_PATTERN, $class)) {
            throw new \InvalidArgumentException(
                "Invalid CSS class name: '{$class}'. " .
                "Classes must contain only letters, digits, hyphens, and underscores."
            );
        }

        // Get existing classes
        $classes = $this->getCSSClasses();

        // Add class only if not already present (deduplication)
        if (!in_array($class, $classes, true)) {
            $classes[] = $class;
        }

        // Update the class attribute
        return $this->setClassAttribute($classes);
    }

    /**

     * Add multiple CSS classes at once

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

     * Batch operation for adding multiple classes.

     * 

     * 

     * 

     * Automatically deduplicates classes.

     * 

     * 

     * 

     * Returns $this for method chaining.

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

     * $button->addCSSClasses(['btn', 'btn-primary', 'btn-lg']);

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

     * @since v1.0.0 2026-04-13

     * @throws \InvalidArgumentException if any class name is invalid

     * @example 

     * @param array $classes Array of class names to add

     * @return self

     */
    public function addCSSClasses(array $classes): self
    {
        $existing = $this->getCSSClasses();

        foreach ($classes as $class) {
            $class = trim($class);
            if ($class === '') {
                continue;
            }

            if (!preg_match(self::CSS_CLASS_PATTERN, $class)) {
                throw new \InvalidArgumentException(
                    "Invalid CSS class name: '{$class}'. " .
                    "Classes must contain only letters, digits, hyphens, and underscores."
                );
            }

            if (!in_array($class, $existing, true)) {
                $existing[] = $class;
            }
        }

        return $this->setClassAttribute($existing);
    }

    /**

     * Remove a CSS class from the element

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

     * Removes the class if present. Safe to call even if class

     * 

     * 

     * 

     * is not present (no error thrown).

     * 

     * 

     * 

     * Returns $this for method chaining.

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

     * $div->removeCSSClass('hidden');

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

     * @example 

     * @param string $class Class name to remove

     * @return self

     */
    public function removeCSSClass(string $class): self
    {
        $class = trim($class);
        
        if (empty($class)) {
            return $this;
        }

        $classes = $this->getCSSClasses();
        
        // Remove the class if present
        $classes = array_filter(
            $classes,
            fn(string $existingClass) => $existingClass !== $class
        );

        // Reindex array to remove gaps
        $classes = array_values($classes);

        return $this->setClassAttribute($classes);
    }

    /**

     * Toggle a CSS class on or off

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

     * If class is present, removes it. If absent, adds it.

     * 

     * 

     * 

     * Optional force parameter can force add (true) or remove (false).

     * 

     * 

     * 

     * Returns $this for method chaining.

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

     * $element->toggleCSSClass('active');

     * 

     * 

     * 

     * $element->toggleCSSClass('highlight', true); // Force add

     * 

     * 

     * 

     * $element->toggleCSSClass('pending', false);  // Force remove

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

     * @since v1.0.5 2026-04-14

     * @throws \InvalidArgumentException if class name is invalid

     * @example 

     * @param string $class

     * @param ?bool $force

     * @return self

     */
        public function toggleCSSClass(string $class, ?bool $force = null): self
    {
        $class = trim($class);

        if (empty($class)) {
            return $this;
        }

        // Validate class name
        if (!preg_match(self::CSS_CLASS_PATTERN, $class)) {
            throw new \InvalidArgumentException(
                "Invalid CSS class name: '{$class}'. " .
                "Classes must contain only letters, digits, hyphens, and underscores."
            );
        }

        $classes = $this->getCSSClasses();
        $hasClass = in_array($class, $classes, true);

        if ($force === null) {
            // Toggle: if present remove, if absent add
            if ($hasClass) {
                $classes = array_filter($classes, fn($c) => $c !== $class);
            } else {
                $classes[] = $class;
            }
        } elseif ($force === true) {
            // Force add
            if (!$hasClass) {
                $classes[] = $class;
            }
        } else {
            // Force remove
            $classes = array_filter($classes, fn($c) => $c !== $class);
        }

        return $this->setClassAttribute(array_values($classes));
    }

    /**

     * Check if a CSS class is present on the element

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

     * if ($div->hasCSSClass('active')) { ... }

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

     * @example 

     * @param string $class Class name to check

     * @return bool True if class is present, false otherwise

     */
    public function hasCSSClass(string $class): bool
    {
        $class = trim($class);
        
        if (empty($class)) {
            return false;
        }

        return in_array($class, $this->getCSSClasses(), true);
    }

    /**

     * Get all CSS classes as an array

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

     * Returns an array of class names currently applied to the element.

     * 

     * 

     * 

     * Returns empty array if no classes present.

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

     * $classes = $div->getCSSClasses();

     * 

     * 

     * 

     * // ['btn', 'btn-primary', 'btn-lg']

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

     * @example 

     * @return array Array of CSS class names

     */
    public function getCSSClasses(): array
    {
        // Get current class attribute value
        $classAttribute = $this->getAttributeValue('class');

        if ($classAttribute === null || empty(trim($classAttribute))) {
            return [];
        }

        // Split by whitespace and filter empty strings
        $classes = array_filter(
            preg_split('/\s+/', trim($classAttribute)),
            fn($class) => !empty($class)
        );

        // Reindex array to ensure proper array indices
        return array_values($classes);
    }

    /**

     * Set the class attribute from an array of class names

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

     * Internal helper method to set the class attribute based on

     * 

     * 

     * 

     * an array of class names. Handles deduplication and proper formatting.

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

     * @since v1.0.0 2026-04-13

     * @access protected

     * @param array $classes Array of class names

     * @return self

     */
    protected function setClassAttribute(array $classes): self
    {
        // Remove duplicates while preserving order
        $uniqueClasses = [];
        foreach ($classes as $class) {
            if (!in_array($class, $uniqueClasses, true)) {
                $uniqueClasses[] = $class;
            }
        }

        if (empty($uniqueClasses)) {
            // Remove class attribute if no classes
            // Note: This assumes removeAttribute or similar exists
            if (method_exists($this, 'removeAttribute')) {
                $this->removeAttribute('class');
            } else {
                // Fallback: set empty string
                $this->setAttribute('class', '');
            }
        } else {
            // Set class attribute with space-separated values
            $classValue = implode(' ', $uniqueClasses);
            $this->setAttribute('class', $classValue);
        }

        return $this;
    }

    /**

     * Get the value of a specific attribute

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

     * This method should be implemented in the class using this trait.

     * 

     * 

     * 

     * It's called by getCSSClasses() to retrieve the current class attribute.

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

     * @since v1.0.5 2026-04-14

     * @access protected

     * @param string $name Attribute name

     * @return ?string

     */
    abstract protected function getAttributeValue(string $name): ?string;

    /**

     * Set an attribute on the element

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

     * This method should be implemented in the class using this trait.

     * 

     * 

     * 

     * It's called by setClassAttribute() to update the class attribute.

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

     *

     * @since v1.0.0 2026-04-13

     * @access public

     * @param string $name Attribute name

     * @param mixed $value Attribute value

     * @return self

     */
    abstract public function setAttribute(string $name, $value): self;
}
