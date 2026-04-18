<?php

namespace Ksfraser\HTML\Crud;

/**

 * Adapter that turns legacy `table_interface` metadata (`table_details`, `fields_array`)

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * into a CRUD descriptor usable by modern view/builders.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Goal: reuse existing schema/field arrays without forcing a rewrite.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
/**
 * LegacyFieldsArrayCrudDescriptor
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * LegacyFieldsArrayCrudDescriptor
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class LegacyFieldsArrayCrudDescriptor
{
    /**
     *
     * @return void
     */
    private $tableDetails;

    /**

     *

     * @return void

     */
    private $fieldsArray;

    /**

     *

     * @return void

     */
    private $options;

    /**

     * Constructor

     *

     * @since 1.0.1 2026-02-16

     * @param array $tableDetails

     * @param array $fieldsArray

     * @param array $options

     * @return void

     */
    public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $tableDetails
 * @param mixed $fieldsArray
 * @param mixed $options
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $tableDetails
 * @param mixed $fieldsArray
 * @param mixed $options
 * @return void
 */
function __construct(array $tableDetails, array $fieldsArray, array $options = array())
    {
        $this->tableDetails = $tableDetails;
        $this->fieldsArray = $fieldsArray;
        $this->options = $options;
    }

    /**

     * Create descriptor from legacy object/array

     *

     * @since v1.0.0 2026-04-13

     * @param mixed $legacy

     * @param array $options

     * @return self

     */
    public static /**
 * fromLegacy
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $legacy
 * @param mixed $options
 * @return void
 */
/**
 * fromLegacy
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $legacy
 * @param mixed $options
 * @return void
 */
function fromLegacy($legacy, array $options = array())
    {
        $tableDetails = array();
        $fieldsArray = array();

        if (is_object($legacy)) {
            if (isset($legacy->table_details) && is_array($legacy->table_details)) {
                $tableDetails = $legacy->table_details;
            }
            if (isset($legacy->fields_array) && is_array($legacy->fields_array)) {
                $fieldsArray = $legacy->fields_array;
            }
        } elseif (is_array($legacy)) {
            if (isset($legacy['table_details']) && is_array($legacy['table_details'])) {
                $tableDetails = $legacy['table_details'];
            }
            if (isset($legacy['fields_array']) && is_array($legacy['fields_array'])) {
                $fieldsArray = $legacy['fields_array'];
            }
        }

        return new self($tableDetails, $fieldsArray, $options);
    }

    /**

     * Get the descriptor title

     *

     * @since v1.0.0 2026-04-13

     * @return string

     */
    public /**
 * getTitle
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getTitle
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getTitle(): string
    {
        if (isset($this->options['title']) && $this->options['title'] !== '') {
            return (string) $this->options['title'];
        }

        $tableName = $this->getTableName();
        if ($tableName !== '') {
            return $tableName;
        }

        return 'CRUD';
    }

    /**

     * Get table name

     *

     * @since v1.0.0 2026-04-13

     * @return string

     */
    public /**
 * getTableName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getTableName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getTableName(): string
    {
        if (isset($this->tableDetails['tablename'])) {
            return (string) $this->tableDetails['tablename'];
        }
        if (isset($this->tableDetails['table_name'])) {
            return (string) $this->tableDetails['table_name'];
        }
        return '';
    }

    /**

     * Get primary key name

     *

     * @since v1.0.0 2026-04-13

     * @return ?string

     */
    public /**
 * getPrimaryKey
 *
 * @since v1.0.0 2026-04-14
 * @return ?string
 */
/**
 * getPrimaryKey
 *
 * @since v1.0.0 2026-04-14
 * @return ?string
 */
function getPrimaryKey(): ?string
    {
        if (isset($this->tableDetails['primarykey']) && $this->tableDetails['primarykey'] !== '') {
            return (string) $this->tableDetails['primarykey'];
        }
        return null;
    }

    /**

     * Returns field descriptors suitable for building a form.

     *

     * @since v1.0.0 2026-04-13

     * @return array

     */
    public /**
 * getFields
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getFields
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getFields(): array
    {
        $foreignKeys = isset($this->options['foreignKeys']) && is_array($this->options['foreignKeys'])
            ? $this->options['foreignKeys']
            : array();

        $fields = array();
        foreach ($this->fieldsArray as $row) {
            if (!is_array($row) || !isset($row['name'])) {
                continue;
            }

            $name = (string) $row['name'];
            $label = isset($row['label']) && $row['label'] !== '' ? (string) $row['label'] : $name;
            $type = isset($row['type']) ? (string) $row['type'] : '';

            $readwrite = isset($row['readwrite']) ? (string) $row['readwrite'] : 'readwrite';
            $readOnly = ($readwrite === 'read' || $readwrite === 'readonly');

            $required = false;
            if (isset($row['null'])) {
                $required = (stripos((string) $row['null'], 'NOT NULL') !== false);
            }

            $defaultValue = null;
            if (array_key_exists('default', $row)) {
                $defaultValue = $row['default'];
            }

            $inputType = $this->inferInputType($name, $type);

            $foreignKeySpec = null;
            if (isset($foreignKeys[$name]) && is_array($foreignKeys[$name])) {
                $foreignKeySpec = $foreignKeys[$name];
                $inputType = 'select';
            }

            $fields[] = new CrudField($name, $label, $inputType, $required, $readOnly, $defaultValue, $foreignKeySpec);
        }

        if (isset($this->options['formFields']) && is_array($this->options['formFields'])) {
            $allowed = array_flip($this->options['formFields']);
            $fields = array_values(array_filter($fields, /**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $field
 * @return void
 */
/**
 * (anonymous)
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $field
 * @return void
 */
function (CrudField $field) use ($allowed) {
                return isset($allowed[$field->name]);
            }));
        }

        return $fields;
    }

    /**

     * Get list columns for display

     *

     * @since v1.0.0 2026-04-13

     * @return array

     */
    public /**
 * getListColumns
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
/**
 * getListColumns
 *
 * @since v1.0.0 2026-04-14
 * @return array
 */
function getListColumns(): array
    {
        if (isset($this->options['listColumns']) && is_array($this->options['listColumns'])) {
            return array_values($this->options['listColumns']);
        }

        $cols = array();

        $pk = $this->getPrimaryKey();
        if ($pk !== null && $pk !== '') {
            $cols[] = $pk;
        }

        foreach ($this->fieldsArray as $row) {
            if (!is_array($row) || !isset($row['name'])) {
                continue;
            }

            $name = (string) $row['name'];
            if ($name === $pk) {
                continue;
            }

            $type = isset($row['type']) ? (string) $row['type'] : '';
            if ($this->isProbablyLargeText($type)) {
                continue;
            }

            $cols[] = $name;
            if (count($cols) >= 6) {
                break;
            }
        }

        return $cols;
    }

    /**

     * Best-effort inference for HTML input widgets.

     *

     * @since v1.0.5 2026-04-14

     * @param mixed $name

     * @param mixed $sqlType

     * @return string

     */
    private /**
 * inferInputType
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $sqlType
 * @return string
 */
/**
 * inferInputType
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @param mixed $sqlType
 * @return string
 */
function inferInputType($name, $sqlType): string
    {
        $nameLower = strtolower((string) $name);
        $typeLower = strtolower((string) $sqlType);

        if ($nameLower === 'inactive') {
            return 'checkbox';
        }

        if (strpos($typeLower, 'bool') !== false || strpos($typeLower, 'tinyint(1)') !== false) {
            return 'checkbox';
        }

        if (strpos($typeLower, 'timestamp') !== false || strpos($typeLower, 'datetime') !== false) {
            return 'datetime';
        }

        if (strpos($typeLower, 'date') !== false) {
            return 'date';
        }

        if (preg_match('/\b(int|smallint|bigint)\b/', $typeLower)) {
            return 'number';
        }

        if (strpos($typeLower, 'double') !== false || strpos($typeLower, 'decimal') !== false || strpos($typeLower, 'float') !== false) {
            return 'number';
        }

        if ($this->isProbablyLargeText($typeLower)) {
            return 'textarea';
        }

        return 'text';
    }

    /**

     *

     * @since v1.0.5 2026-04-14

     * @param mixed $sqlTypeLower

     * @return bool

     */
    private /**
 * isProbablyLargeText
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sqlTypeLower
 * @return bool
 */
/**
 * isProbablyLargeText
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $sqlTypeLower
 * @return bool
 */
function isProbablyLargeText($sqlTypeLower): bool
    {
        $t = strtolower((string) $sqlTypeLower);
        return (strpos($t, 'text') !== false || strpos($t, 'blob') !== false);
    }
}
