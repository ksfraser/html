<?php
namespace Ksfraser\HTML\Rows;

use Ksfraser\HTML\Elements\TableRow;

/**
 * BaseTableRow - Abstract base for domain-specific table row builders
 * 
 * SRP: Single responsibility of building domain-specific table rows.
 * Each subclass handles building a row for a specific domain object.
 * 
 * @package Ksfraser\HTML\Rows
 */
abstract class BaseTableRow {
    /**
     * Build a table row from a domain object
     * 
     * @param object $data Domain object (Loan, LoanType, etc)
     * @return TableRow
     */
    abstract public function build(object $data): TableRow;
}
