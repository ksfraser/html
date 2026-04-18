<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\Elements\HtmlTable;
use Ksfraser\HTML\Composites\HTML_ROW;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\HtmlElementInterface;
use Exception;

/**

 * HTML_TABLE - Backward-compatible wrapper for table rendering

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This class provides backward compatibility with legacy code that uses HTML_TABLE.

 * 

 * 

 * 

 * It wraps the modern HtmlTable class and maintains the old interface:

 * 

 * 

 * 

 * - appendRow($row) accepts HTML_ROW objects or strings

 * 

 * 

 * 

 * - toHtml() outputs directly to screen (legacy behavior)

 * 

 * 

 * 

 * - getHtml() returns HTML string (modern approach)

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * The original HTML_TABLE used FrontAccounting's start_table() and end_table()

 * 

 * 

 * 

 * functions. This wrapper maintains that behavior while using modern OOP.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *             New code should use HtmlTable directly with composition.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @deprecated This class exists for backward compatibility only.

 * @since v1.0.0 2025-10-31

 * @see \Ksfraser\HTML\HtmlTable

 * @package Ksfraser\HTML

 * @version 20251019.1 - Fixed $rows bug from original (line 127 used $rows instead of $this->rows)

 * @return void

 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HTML_TABLE
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HTML_TABLE implements HtmlElementInterface
{
    /**
     * Array of HTML_ROW objects
     *
     * @var array<HTML_ROW>
     * @return void
     */
    protected $rows;
    
    /**
    
     * Table style (FrontAccounting tablestyle constant)
    
     *
    
     * @var int
    
     * @return void
    
     */
    protected $style;
    
    /**
    
     * Table width percentage
    
     *
    
     * @var int
    
     * @return void
    
     */
    protected $width;
    
    /**
    
     * Create a new table
    
     *
    
     * @since v1.0.0 2025-10-31
    
     * @param ?int $style
    
     * @param int $width
    
     * @return void
    
     */
public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @param int|null $style
 * @param int $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $style
 * @param mixed $width
 * @return void
 */
function __construct(?int $style = null, int $width = 100)
    {
        $this->style = $style ?? 2;  // null becomes 2
        $this->width = $width;
        $this->rows = array();
    }
    
    /**
    
     * Append a row to the table
    
     *
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * Accepts either an HTML_ROW object, HtmlElementInterface, or a string.
    
     *     
    
     *     
    
     *     
    
     * If a string is passed, it will be wrapped in an HTML_ROW automatically.
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
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
    
     * @throws Exception If parameter is neither HTML_ROW, HtmlElementInterface, nor string
    
     * @param mixed $row
    
     * @return void
    
     */
public /**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
/**
 * appendRow
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $row
 * @return void
 */
function appendRow($row): void
    {
        if (is_object($row)) {
            if (is_a($row, HTML_ROW::/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)) {
                $this->rows[] = $row;
            } elseif (is_a($row, HtmlElementInterface::/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * rows
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class)) {
                // Wrap HtmlElementInterface in HTML_ROW
                $this->rows[] = new HTML_ROW($row);
            } else {
                throw new Exception("Passed in class is not an HTML_ROW or child type!");
            }
        } elseif (is_string($row)) {
            $r = new HTML_ROW($row);
            $this->rows[] = $r;
        } else {
            throw new Exception("Passed in data for a row is neither a class nor a string");
        }
    }
    
    /**
    
     * Output the table HTML directly to screen
    
     *
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * Generates standard HTML table tags without relying on global functions.
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
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
    
     * @return void
    
     */
    public /**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void
    {
        // Generate table HTML directly
        echo "<table class='tablestyle" . $this->style . "' width='" . $this->width . "%'>\n";
        
        // Output each row
        foreach ($this->rows as $row) {
            $row->toHtml();
        }
        
        // End table
        echo "</table>\n";
    }
    
    /**
    
     * Get the table HTML as a string
    
     *
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * Modern approach that returns HTML instead of echoing.
    
     *     
    
     *     
    
     *     
    
     * This allows for better testability and composition.
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
     * 
    
     *     
    
     *     
    
     *     
    
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
    
     * @return string The table HTML
    
     */
    public /**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string
    {
        ob_start();
        $this->toHtml();
        return ob_get_clean();
    }
}

