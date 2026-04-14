<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;

/**
 * BaseTableRow - Abstract base for domain-specific table row builders
 *
 * SRP: Single responsibility of building domain-specific table rows.
 * Each subclass handles building a row for a specific domain object.
 *
 *
 * @package Ksfraser\HTML\Rows
 * @since 1.0.1 2026-02-16
 */
abstract class BaseTableRow {
    /**
     * @var string|null Optional row ID for cell referencing
     */
    protected ?string $rowId = null;
    
    /**
     * Set row ID for automatic cell ID generation
     * 
     * @param string $rowId The row ID (e.g., "loan-123")
     * @return self
 * @since 1.0.1 2026-02-16
     */
    public function setRowId(string $rowId): self {
        $this->rowId = $rowId;
        return $this;
    }
    
    /**
     * Build a table row from a domain object
     * 
     * @param object $data Domain object (Loan, LoanType, etc)
     * @return TableRow
 * @since v1.0.0 2026-04-13
     */
    abstract public function build(object $data): TableRow;
}
