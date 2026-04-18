<?php

namespace Ksfraser\HTML\Traits;

/**

 * DataAttributeTrait - FR-008

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Provides convenient methods for managing HTML5 data-* attributes

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

 *   $element->setData('userId', '123');

 * 

 * 

 * 

 *   $element->setData('config', ['key' => 'value']);

 * 

 * 

 * 

 *   echo $element->getData('userId'); // "123"

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

 *       ->setData('type', 'widget')

 * 

 * 

 * 

 *       ->setData('version', '2.0');

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

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
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * DataAttributeTrait
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
trait DataAttributeTrait
{
    /**
     * Storage for data attributes
     *
     * 
     * 
     * Format: ['keyName' => $value, ...]
     * 
     * 
     * 
     *
     * @var array $dataAttributes
     * @return void
     */
    protected array $dataAttributes = [];

    /**

     * Set a single data attribute

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Stores the value internally. If the key already exists, it's replaced.

     * 

     * 

     * 

     * Values are automatically escaped during HTML rendering via renderDataAttributes().

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *                    Example: 'userId' for data-userId

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $element->setData('userId', '123');

     * 

     * 

     * 

     *   $element->setData('config', ['key' => 'value']);

     * 

     * 

     * 

     *   $element->setData('active', true);

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @example 

     * @param string $key The data attribute name (without 'data-' prefix)

     * @param mixed $value The attribute value (string, int, bool, array, object)

     * @return self Returns $this for method chaining

     */
    public /**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @param string $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
/**
 * setData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @param mixed $value
 * @return self
 */
function setData(string $key, mixed $value): self
    {
        if (!empty($key)) {
            $this->dataAttributes[$key] = $value;
        }
        return $this;
    }

    /**

     * Get a data attribute value

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Returns the raw, unescaped value. Returns null if the key doesn't exist.

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $value = $element->getData('userId'); // "123"

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @param string $key The data attribute name (without 'data-' prefix)

     * @return mixed The stored value, or null if not found

     */
    public /**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @param string $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
/**
 * getData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return mixed
 */
function getData(string $key): mixed
    {
        return $this->dataAttributes[$key] ?? null;
    }

    /**

     * Check if a data attribute exists

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   if ($element->hasData('userId')) {

     * 

     * 

     * 

     *       echo $element->getData('userId');

     * 

     * 

     * 

     *   }

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @param string $key The data attribute name (without 'data-' prefix)

     * @return bool True if the key exists, false otherwise

     */
    public /**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @param string $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
/**
 * hasData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return bool
 */
function hasData(string $key): bool
    {
        return isset($this->dataAttributes[$key]);
    }

    /**

     * Remove a single data attribute

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Safe to call for non-existent keys (no exception thrown).

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $element->removeData('userId');

     * 

     * 

     * 

     *   $element->removeData('nonexistent'); // No error

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @param string $key The data attribute name (without 'data-' prefix)

     * @return self Returns $this for method chaining

     */
    public /**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @param string $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
/**
 * removeData
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $key
 * @return self
 */
function removeData(string $key): self
    {
        unset($this->dataAttributes[$key]);
        return $this;
    }

    /**

     * Remove all data attributes

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $element->clearData();

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @return self Returns $this for method chaining

     */
    public /**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
/**
 * clearData
 *
 * @since v1.0.0 2026-04-14
 * @return self
 */
function clearData(): self
    {
        $this->dataAttributes = [];
        return $this;
    }

    /**

     * Set multiple data attributes from an array

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Merges with existing data attributes (existing keys are overwritten).

     * 

     * 

     * 

     * This is useful for bulk setting attributes during construction.

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *                    Example: ['userId' => '123', 'userName' => 'John']

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $element->setDataAttributes([

     * 

     * 

     * 

     *       'userId' => '123',

     * 

     * 

     * 

     *       'userName' => 'John',

     * 

     * 

     * 

     *       'role' => 'admin'

     * 

     * 

     * 

     *   ]);

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @param array $data Associative array of key-value pairs

     * @return self Returns $this for method chaining

     */
    public /**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @param array $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
/**
 * setDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return self
 */
function setDataAttributes(array $data): self
    {
        foreach ($data as $key => $value) {
            $this->setData($key, $value);
        }
        return $this;
    }

    /**

     * Get all data attributes as an associative array

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Returns raw, unescaped values.

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $all = $element->getAllData();

     * 

     * 

     * 

     *   // ['userId' => '123', 'userName' => 'John']

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @return array Associative array of all data attributes

     */
    public /**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getAllData
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getAllData(): array
    {
        return $this->dataAttributes;
    }

    /**

     * Render data attributes as HTML attribute string

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Internal method called from HtmlElement::getAttributes().

     * 

     * 

     * 

     * Transforms stored data attributes into HTML-safe attribute format:

     * 

     * 

     * 

     *   data-userId="escaped-value" data-config="escaped-json"

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * All values are automatically HTML-escaped using htmlspecialchars() with

     * 

     * 

     * 

     * ENT_QUOTES | ENT_HTML5 for security (prevents XSS).

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Data types are converted to strings:

     * 

     * 

     * 

     *   - string: used as-is

     * 

     * 

     * 

     *   - bool: rendered as "true" or "false"

     * 

     * 

     * 

     *   - int/float: converted to string

     * 

     * 

     * 

     *   - array/object: converted to JSON

     * 

     * 

     * 

     *   - null: not rendered

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     *   $html = $element->renderDataAttributes();

     * 

     * 

     * 

     *   // ' data-userId="123" data-active="true"'

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @internal Called from HtmlElement::getAttributes()

     * @example 

     * @return string HTML attribute string, empty string if no data attributes

     */
    protected /**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * renderDataAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function renderDataAttributes(): string
    {
        if (empty($this->dataAttributes)) {
            return '';
        }

        $attributes = [];

        foreach ($this->dataAttributes as $key => $value) {
            $attributeName = 'data-' . $key;
            $attributeValue = $this->convertDataValueToString($value);

            if (!empty($attributeValue)) {
                $escaped = htmlspecialchars($attributeValue, ENT_QUOTES | ENT_HTML5, 'UTF-8');
                $attributes[] = "{$attributeName}=\"{$escaped}\"";
            }
        }

        if (empty($attributes)) {
            return '';
        }

        return ' ' . implode(' ', $attributes);
    }

    /**

     * Convert data attribute value to string

     *

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * Handles type conversions for various PHP types:

     * 

     * 

     * 

     *   - string: returned as-is

     * 

     * 

     * 

     *   - bool: converted to "true" or "false"

     * 

     * 

     * 

     *   - int/float: converted to string via (string)

     * 

     * 

     * 

     *   - array: converted to JSON

     * 

     * 

     * 

     *   - object: converted to JSON via json_encode

     * 

     * 

     * 

     *   - null: returned as empty string

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

     * 

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

     * @param mixed $value The value to convert

     * @return string The string representation

     */
    private /**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
/**
 * convertDataValueToString
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return string
 */
function convertDataValueToString(mixed $value): string
    {
        if ($value === null) {
            return '';
        }

        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_string($value)) {
            return $value;
        }

        if (is_numeric($value)) {
            return (string)$value;
        }

        if (is_array($value) || is_object($value)) {
            return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        return (string)$value;
    }
}
