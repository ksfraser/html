<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * FaCell - FrontAccounting Table Cell Element

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Generates HTML table cell (td) with FA-specific functionality,

 * 

 * 

 * 

 * matching the output of label_cells and similar functions.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
/**
 * FaCell
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class FaCell extends HtmlTd
{
    private $extra;

    /**

     * Constructor

     *

     * @since v1.0.0 2026-04-11

     * @param mixed $content

     * @param mixed $extra

     * @return void

     */
public /**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $content
 * @param mixed $extra
 * @return void
 */
function __construct($content = "", $extra = "")
    {
        parent::__construct(new HtmlString($content));
        $this->extra = $extra;

        // Set attributes
        $this->setCellAttributes();
    }

    /**

     * Set cell attributes based on extra parameter

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    private /**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @return void
 */
/**
 * setCellAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function setCellAttributes()
    {
        if ($this->extra) {
            $this->parseExtraAttributes();
        }
    }

    /**

     * Parse extra attributes string

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    private /**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @return void
 */
/**
 * parseExtraAttributes
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function parseExtraAttributes()
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
