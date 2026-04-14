<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**
 * TableBuilder - Fluent Table Construction Helper
 *
 * Provides convenient methods for building HTML tables with reduced boilerplate.
 * Simplifies table header and row creation from arrays.
 *
 * Design Pattern: Builder Pattern
 * - Fluent interface for building complex tables
 * - Encapsulates table construction logic
 * - Reduces code duplication
 *
 * SOLID Principles:
 * - Single Responsibility: Only builds table elements
 * - Open/Closed: Can be extended for different table types
 * - Liskov Substitution: Can replace HtmlElement
 * - Interface Segregation: Simple, focused interface
 * - Dependency Inversion: Composes with HTML elements
 *
 * Usage:
 * ```php
 * $headers = ['ID', 'Name', 'Email', 'Actions'];
 * $headerRow = TableBuilder::createHeaderRow($headers);
 * $table->appendChild($headerRow);
 *
 * // Or with more control:
 * $builder = new TableBuilder();
 * $row = $builder->buildHeaderRow(['Col1', 'Col2', 'Col3']);
 * ```
 *
 *
 * @package    Ksfraser\HTML
 * @author     Kevin Fraser / GitHub Copilot
 * @version    1.0.0
 * @since 1.0.1 2026-02-16
 */
class TableBuilder
{
    /**
     * Create a table header row from an array of header values
     * 
     * Convenience static method for quick header row creation.
     * 
     * @param array $headers Array of header text values
     * 
     * @return HtmlTableRow Table row containing header cells
     * 
     * @example
     * ```php
     * $headers = ['ID', 'Name', 'Email', 'Actions'];
     * $headerRow = TableBuilder::createHeaderRow($headers);
     * $table->appendChild($headerRow);
     * ```
 * @since 1.0.1 2026-02-16
     */
    public static function createHeaderRow(array $headers)
    {
        $row = new HtmlTableRow(new HtmlString(''));
        
        foreach ($headers as $headerText) {
            $cell = new HtmlTableHeaderCell(new HtmlString($headerText));
            $row->append($cell);
        }
        
        return $row;
    }

    /**
     * Create a table data row from an array of cell values
     * 
     * Convenience static method for quick data row creation.
     * 
     * @param array $cells Array of cell text values
     * 
     * @return HtmlTableRow Table row containing data cells
     * 
     * @example
     * ```php
     * $data = ['123', 'John Doe', 'john@example.com'];
     * $dataRow = TableBuilder::createDataRow($data);
     * $table->appendChild($dataRow);
     * ```
 * @since v1.0.0 2026-04-13
     */
    public static function createDataRow(array $cells)
    {
        $row = new HtmlTableRow(new HtmlString(''));
        
        foreach ($cells as $cellValue) {
            $cell = new HtmlTableRowCell(new HtmlString($cellValue));
            $row->append($cell);
        }
        
        return $row;
    }

    /**
     * Build a table header row with optional HTML escaping
     * 
     * Instance method for more complex header scenarios.
     * 
     * 
     * @return HtmlTableRow Table row containing header cells
 * @param array $headers
 * @param mixed $escapeHtml
 * @param mixed $headerClass
 * @since v1.0.5 2026-04-14
 */
public function buildHeaderRow(array $headers, $escapeHtml = true, $headerClass = null)
    {
        $row = new HtmlTableRow(new HtmlString(''));
        
        foreach ($headers as $headerText) {
            $cell = new HtmlTableHeaderCell(new HtmlString($headerText));
            if ($headerClass) {
                $cell->addAttribute('class', $headerClass);
            }
            $row->append($cell);
        }
        
        return $row;
    }

    /**
     * Build a table data row with optional HTML escaping
     * 
     * Instance method for more complex row scenarios.
     * 
     * 
     * @return HtmlTableRow Table row containing data cells
 * @param array $cells
 * @param mixed $escapeHtml
 * @param mixed $cellClass
 * @since v1.0.5 2026-04-14
 */
public function buildDataRow(array $cells, $escapeHtml = true, $cellClass = null)
    {
        $row = new HtmlTableRow(new HtmlString(''));
        
        foreach ($cells as $cellValue) {
            $cell = new HtmlTableRowCell(new HtmlString($cellValue));
            if ($cellClass) {
                $cell->addAttribute('class', $cellClass);
            }
            $row->append($cell);
        }
        
        return $row;
    }

    /**
     * Build a complete table header row with styled cells
     * 
     * Adds Bootstrap or custom classes to header cells.
     * 
     * @param array $headers    Array of header text values
     * @param array $cellAttrs  Optional attributes for header cells (class, style, etc.)
     * 
     * @return HtmlTableRow Table row containing styled header cells
     * 
     * @example
     * ```php
     * $headers = ['ID', 'Name', 'Actions'];
     * $attrs = ['class' => 'bg-dark text-white'];
     * $headerRow = (new TableBuilder())->buildStyledHeaderRow($headers, $attrs);
     * ```
 * @since v1.0.0 2026-04-13
     */
    public function buildStyledHeaderRow(array $headers, array $cellAttrs = [])
    {
        $row = new HtmlTableRow(new HtmlString(''));
        
        foreach ($headers as $headerText) {
            $cell = new HtmlTableHeaderCell(new HtmlString($headerText));
            foreach ($cellAttrs as $attrName => $attrValue) {
                $cell->addAttribute($attrName, $attrValue);
            }
            $row->append($cell);
        }
        
        return $row;
    }
}

