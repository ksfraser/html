<?php
namespace Ksfraser\HTML\Cells;

use Ksfraser\HTML\Elements\TableData;

/**
 * BaseTableCell - Abstract base for reusable table cells
 *
 * SRP: Single responsibility of building specific cell types.
 * Each cell class handles formatting, styling, and content for its domain.
 * Supports fluent interface for optional attributes, IDs, and event handlers.
 *
 *
 * @package Ksfraser\HTML\Cells
 * @since 1.0.1 2026-02-16
 */
abstract class BaseTableCell {
    /**
     * @var string Optional cell ID for referencing
     */
    protected $id = '';
    
    /**
     * @var array Custom attributes (data-*, aria-*, etc)
     */
    /**
     * @var string Optional ondblclick handler for spreadsheet editing
     */
    protected $dblClickHandler = '';
    
    /**
     * @var bool Whether cell is editable (contenteditable)
     */
    protected $isEditable = false;

    /**
     * Set cell ID for referencing
     * 
     * @param string $id HTML id attribute
     * @return self
 * @since 1.0.1 2026-02-16
     */
    public function setId(string $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Set custom attribute (data-*, aria-*, etc)
     * 
     * @return self
 * @param string $name
 * @param mixed $value
 * @since v1.0.5 2026-04-14
 */
public function setAttribute(string $name, $value): self {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * Set ondblclick handler for spreadsheet-like editing
     * 
     * @param string $handler JavaScript function call (e.g., 'editCell(this)')
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function setDblClickHandler(string $handler): self {
        $this->dblClickHandler = $handler;
        return $this;
    }

    /**
     * Set cell as editable (contenteditable attribute)
     * 
     * @param bool $editable Whether cell should be contenteditable
     * @return self
 * @since v1.0.0 2026-04-13
     */
    public function setEditable(bool $editable = true): self {
        $this->isEditable = $editable;
        return $this;
    }

    /**
     * Build a table cell with appropriate content and styling
     * 
     * @param mixed $value The value to display in the cell
     * @return TableData
 * @since v1.0.0 2026-04-13
     */
    abstract public function build($value): TableData;

    /**
     * Apply configured attributes to a TableData element
     * 
     * @param TableData $cell The cell to configure
     * @return TableData
     * @protected
 * @since v1.0.0 2026-04-13
     */
    protected function applyAttributes(TableData $cell): TableData {
        if ($this->id) {
            $cell->setAttribute('id', $this->id);
        }
        
        foreach ($this->attributes as $name => $value) {
            $cell->setAttribute($name, $value);
        }
        
        if ($this->dblClickHandler) {
            $cell->setAttribute('ondblclick', $this->dblClickHandler);
        }
        
        if ($this->isEditable) {
            $cell->setAttribute('contenteditable', 'true');
        }
        
        return $cell;
    }
}

