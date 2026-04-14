<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

/**

 * VIEW_DIV.

 *

 * @since v1.0.0 2025-04-23

 * @return void

 */
class VIEW_DIV extends origin
{
	protected $name;
	protected $div_item_array;
	protected $content;
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $name
 * @return void
 */
	function __construct( $name = "" )
	{
            
		$this->div_item_array = array();
		$this->set( "name", $name );
	}
/**
 * __toString()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	function __toString()
	{
		$this->start_div();
		foreach( $this->div_item_array as $obj )
		{
			echo $obj;
		}
		$this->end_div();
	}
/**
 * start_div()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	function start_div()
	{
		start_div( $this->get( "name" ) );
	}
/**
 * end_div()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	function end_div()
	{
		end_div();
	}
    /**
     * Add content to the div with validation.
     *
     * @since v2.0.1 2026-04-14
     * @throws InvalidArgumentException If the content is not a string.
     * @param mixed $content
     * @return void
     */
    public function add_content($content)
    {
        if (!is_string($content)) {
            throw new InvalidArgumentException("Content must be a string.");
        }

        $this->content .= $content;
    }
    /**
     * Generate the HTML output for the div.
     *
     * @since v1.0.5 2026-04-14
     * @return string The HTML representation of the div.
     */
    public function toHtml()
    {
        $html = '';
        $html .= $this->start_div();
        foreach ($this->div_item_array as $item) {
            $html .= $item->toHtml();
        }
        $html .= $this->end_div();

        // Check for empty content and return self-closing tag if applicable
        return trim($html) === '' ? '<div />' : $html;
    }
}
