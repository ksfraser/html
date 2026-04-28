<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * FaTable - FrontAccounting Table Element
 *
 * Generates HTML table with FA-specific styling and attributes,
 * matching the output of start_table() function.
 */
class FaTable extends HtmlTable
{
    private $faClass;
    private $extra;

    /**
     * Constructor
     *
     * Mirrors the FrontAccounting start_table() function signature: an integer
     * style constant selects the table CSS class and an optional attribute string
     * passes extra HTML attributes. Neither parameter is an HtmlElementInterface
     * because this constructor configures FA-specific metadata, not child content.
     *
     * @param int    $class FA table style constant: 1 = tablestyle,
     *                      2 = tablestyle2 (default), 3 = tablestyle_noborder.
     * @param string $extra Additional HTML attribute string (e.g. "width='80%'").
     */
    public function __construct(int $class = 2, string $extra = "")
    {
        parent::__construct(new HtmlString("")); // Empty content initially
        $this->faClass = $class;
        $this->extra = $extra;

        // Set attributes
        $this->setTableAttributes();
    }

    /**
     * Set table attributes based on FA style
     */
    private function setTableAttributes()
    {
        // Set class
        $className = $this->getClassName();
        if ($className) {
            $this->attributeList->addAttribute(new HtmlAttribute("class", $className));
        }

        // Set cellpadding and cellspacing
        $this->attributeList->addAttribute(new HtmlAttribute("cellpadding", "2"));
        $this->attributeList->addAttribute(new HtmlAttribute("cellspacing", "0"));

        // Add extra attributes
        if ($this->extra) {
            $this->parseExtraAttributes();
        }
    }

    /**
     * Get CSS class name based on FA constant
     */
    private function getClassName()
    {
        switch ($this->faClass) {
            case 1: return 'tablestyle';
            case 2: return 'tablestyle2';
            case 3: return 'tablestyle_noborder';
            default: return 'tablestyle2';
        }
    }

    /**
     * Parse extra attributes string
     */
    private function parseExtraAttributes()
    {
        // Simple parsing: assume format like "key='value' key2='value2'"
        $attrs = explode(' ', trim($this->extra));
        foreach ($attrs as $attr) {
            if (strpos($attr, '=') !== false) {
                list($key, $value) = explode('=', $attr, 2);
                $value = trim($value, "'\"");
                $this->attributeList->addAttribute(new HtmlAttribute($key, $value));
            }
        }
    }

    /**
     * Override toHtml to wrap in center tags for FA compatibility
     */
    public function toHtml(): void
    {
        echo "<center>";
        parent::toHtml();
        echo "</center>\n";
    }
}