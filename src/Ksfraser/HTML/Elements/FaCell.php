<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * FaCell - FrontAccounting Table Cell Element
 *
 * Generates HTML table cell (td) with FA-specific functionality,
 * matching the output of label_cells and similar functions.
 *
 * @since v1.0.0 2026-04-11
 */
class FaCell extends HtmlTd
{
    private $extra;

    /**
     * Constructor
     *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 * @since v1.0.0 2026-04-11
 */
public function __construct($content = "", $extra = "")
    {
        parent::__construct(new HtmlString($content));
        $this->extra = $extra;

        // Set attributes
        $this->setCellAttributes();
    }

    /**
     * Set cell attributes based on extra parameter
 * @return void
 * @since v1.0.0 2026-04-13
     */
    private function setCellAttributes()
    {
        if ($this->extra) {
            $this->parseExtraAttributes();
        }
    }

    /**
     * Parse extra attributes string
 * @return void
 * @since v1.0.0 2026-04-13
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
}
