<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * FaTable - FrontAccounting Table Element

 *

 * 

 * Generates HTML table with FA-specific styling and attributes,

 * matching the output of start_table() function.

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class FaTable extends HtmlTable
{
    private $faClass;
    private $extra;

    /**

     * Constructor

     *

     * @since v1.0.0 2026-04-11

     * @param mixed $class

     * @param mixed $extra

     * @return void

     */
public function __construct($class = 2, $extra = "")
    {
        parent::__construct(new HtmlString("")); // Empty content initially
        $this->faClass = $class;
        $this->extra = $extra;

        // Set attributes
        $this->setTableAttributes();
    }

    /**

     * Set table attributes based on FA style

     *

     * @since v1.0.0 2026-04-13

     * @return void

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

     *

     * @since v1.0.0 2026-04-13

     * @return void

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

     *

     * @since v1.0.0 2026-04-13

     * @return void

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

     *

     * @since v1.0.0 2026-04-13

     * @return void

     */
    public function toHtml(): void
    {
        echo "<center>";
        parent::toHtml();
        echo "</center>\n";
    }
}
