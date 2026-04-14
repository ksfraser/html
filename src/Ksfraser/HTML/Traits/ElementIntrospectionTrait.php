<?php

namespace Ksfraser\HTML\Traits;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * ElementIntrospectionTrait - FR-010
 * Provides methods for querying, introspecting, and traversing HTML element trees
 *
 * Enables efficient searching and filtering of element hierarchies.
 *
 * Usage:
 *   $buttons = $container->findByTag('button');
 *   $required = $form->findByAttribute('required', 'required');
 *   $dialog = $parent->findById('dialog-id');
 *
 *   $allInputs = $form->getAllNested();
 *   if ($container->containsNested($element)) { ... }
 *
 *
 * @package Ksfraser\HTML\Traits
 * @since 1.0.5 2026-03-30
 */
trait ElementIntrospectionTrait
{
    /**
     * Get direct child elements (not including HtmlString or text content)
     *
     * @return array Array of
 HtmlElement children
     *
     * @example
     *   $children = $parent->getChildren();
     *   foreach ($children as $child) {
     *       echo $child->getTag();
     *   }
 * @since 1.0.5 2026-03-30
     */
    public function getChildren(): array
    {
        $children = [];

        if (empty($this->nested)) {
            return $children;
        }

        foreach ($this->nested as $item) {
            if (is_object($item) && method_exists($item, 'getTag')) {
                $children[] = $item;
            }
        }

        return $children;
    }

    /**
     * Get all nested elements (recursive)
     *
     * Returns flat array of all element descendants, including grandchildren, etc.
     *
     * @return array Array of all nested HtmlElement descendants
     *
     * @example
     *   $all = $container->getAllNested();
     *   echo count($all); // 42 elements total
 * @since v1.0.0 2026-04-13
     */
    public function getAllNested(): array
    {
        $nested = [];
        $children = $this->getChildren();

        foreach ($children as $child) {
            $nested[] = $child;

            // Recursively add child's nested elements
            if (method_exists($child, 'getAllNested')) {
                $nested = array_merge($nested, $child->getAllNested());
            }
        }

        return $nested;
    }

    /**
     * Find elements by tag name
     *
     * Searches all nested elements for those matching the tag.
     *
     * @param string $tag The tag name to search for (e.g., 'button', 'input', 'div')
     *
     * @return array Array of matching elements
     *
     * @example
     *   $buttons = $form->findByTag('button');
     *   $inputs = $form->findByTag('input');
 * @since v1.0.0 2026-04-13
     */
    public function findByTag(string $tag): array
    {
        $results = [];
        $all = $this->getAllNested();

        foreach ($all as $element) {
            if ($element->getTag() === $tag) {
                $results[] = $element;
            }
        }

        return $results;
    }

    /**
     * Find elements by attribute value
     *
     * Searches nested elements for those with a specific attribute value.
     *
     * @param string $name The attribute name
     * @param string $value The attribute value to match
     *
     * @return array Array of matching elements
     *
     * @example
     *   $required = $form->findByAttribute('required', 'required');
     *   $textInputs = $form->findByAttribute('type', 'text');
 * @since v1.0.0 2026-04-13
     */
    public function findByAttribute(string $name, string $value): array
    {
        $results = [];
        $all = $this->getAllNested();

        foreach ($all as $element) {
            if ($element->getAttributeValue($name) === $value) {
                $results[] = $element;
            }
        }

        return $results;
    }

    /**
     * Find elements by CSS class
     *
     * Searches nested elements for those containing a specific CSS class.
     *
     * @param string $class The CSS class name to search for
     *
     * @return array Array of elements with the class
     *
     * @example
     *   $buttons = $container->findByClass('btn');
     *   $primary = $container->findByClass('btn-primary');
 * @since v1.0.0 2026-04-13
     */
    public function findByClass(string $class): array
    {
        $results = [];
        $all = $this->getAllNested();

        foreach ($all as $element) {
            if (method_exists($element, 'hasCSSClass') && $element->hasCSSClass($class)) {
                $results[] = $element;
            }
        }

        return $results;
    }

    /**
     * Find elements that have a specific attribute (regardless of value)
     *
     * Searches for elements that have the attribute defined, regardless of its value.
     *
     * @param string $name The attribute name
     *
     * @return array Array of elements with the attribute
     *
     * @example
     *   $required = $form->findByAttributeExists('required');
     *   $dataElements = $container->findByAttributeExists('data-config');
 * @since v1.0.0 2026-04-13
     */
    public function findByAttributeExists(string $name): array
    {
        $results = [];
        $all = $this->getAllNested();

        foreach ($all as $element) {
            if ($element->getAttributeValue($name) !== null) {
                $results[] = $element;
            }
        }

        return $results;
    }

    /**
     * Find element by ID
     *
     * Searches nested elements for one matching the specific ID.
     * Returns first match or null if not found.
     *
     * @param string $id The element ID
     *
     *
     * @example
     *   $dialog = $page->findById('modal-dialog');
     *   if ($dialog) { ... }
 * @return ?HtmlElementInterface
 * @since v1.0.5 2026-04-14
 */
public function findById(string $id): ?HtmlElementInterface
    {
        $all = $this->getAllNested();

        foreach ($all as $element) {
            if ($element->getAttributeValue('id') === $id) {
                return $element;
            }
        }

        return null;
    }

    /**
     * Get an attribute value by name
     *
     * Returns the string value of an attribute, or null if not found.
     *
     * @param string $name The attribute name
     *
     *
     * @example
     *   $type = $input->getAttributeValue('type');
     *   $role = $div->getAttributeValue('role');
 * @return ?string
 * @since v1.0.5 2026-04-14
 */
public function getAttributeValue(string $name): ?string
    {
        return $this->attributeList?->getAttributeValue($name);
    }

    /**
     * Get an attribute object by name
     *
     * Returns the HtmlAttribute object or null if not found.
     * Returns null if not supported by the underlying attribute list.
     *
     * @param string $name The attribute name
     *
     * @return mixed The attribute object, or null
     *
     * @example
     *   $attr = $element->getAttribute('class');
     *   if ($attr) { ... }
 * @since v1.0.0 2026-04-13
     */
    public function getAttribute(string $name)
    {
        if (method_exists($this->attributeList, 'getAttribute')) {
            return $this->attributeList->getAttribute($name);
        }
        return null;
    }

    /**
     * Get the tag name of this element
     *
     *
     * @example
     *   $tag = $element->getTag();
     *   if ($tag === 'button') { ... }
 * @return ?string
 * @since v1.0.5 2026-04-14
 */
public function getTag(): ?string
    {
        return $this->tag ?? null;
    }

    /**
     * Check if element has direct children
     *
     * @return bool True if element has child elements
     *
     * @example
     *   if ($container->hasChildren()) {
     *       // has children
     *   }
 * @since v1.0.0 2026-04-13
     */
    public function hasChildren(): bool
    {
        return count($this->getChildren()) > 0;
    }

    /**
     * Get count of direct children
     *
     * Returns count of immediate child elements (not recursive).
     *
     * @return int Number of direct children
     *
     * @example
     *   $count = $parent->getChildCount();
 * @since v1.0.0 2026-04-13
     */
    public function getChildCount(): int
    {
        return count($this->getChildren());
    }

    /**
     * Get count of all nested elements (recursive)
     *
     * Counts all descendants at all levels.
     *
     * @return int Total number of nested elements
     *
     * @example
     *   $total = $root->getNestedCount();
 * @since v1.0.0 2026-04-13
     */
    public function getNestedCount(): int
    {
        return count($this->getAllNested());
    }

    /**
     * Check if element contains a specific child
     *
     * Checks if the given element is a direct child of this element.
     *
     * @param HtmlElementInterface $child The potential child element
     *
     * @return bool True if element is a direct child
     *
     * @example
     *   if ($parent->containsChild($element)) { ... }
 * @since v1.0.0 2026-04-13
     */
    public function containsChild(HtmlElementInterface $child): bool
    {
        $children = $this->getChildren();
        return in_array($child, $children, true);
    }

    /**
     * Check if element contains a nested element (recursive)
     *
     * Checks if the given element is anywhere in the element tree (not just direct child).
     *
     * @param HtmlElementInterface $element The potential nested element
     *
     * @return bool True if element is contained anywhere in tree
     *
     * @example
     *   if ($root->containsNested($deepElement)) { ... }
 * @since v1.0.0 2026-04-13
     */
    public function containsNested(HtmlElementInterface $element): bool
    {
        $nested = $this->getAllNested();
        return in_array($element, $nested, true);
    }
}

