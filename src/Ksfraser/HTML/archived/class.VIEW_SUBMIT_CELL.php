<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

require_once( 'class.VIEW_CELL.php' );
/**
 * VIEW_SUBMIT_CELL.
 *
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_SUBMIT_CELL extends VIEW_CELL
{
//aspect='default'  name="RefreshInquiry"  id="RefreshInquiry" value="Search" title='Refresh Inquiry'
	protected $name;
	protected $id;
	protected $value;
	protected $title;
	protected $aspect;
	protected $submit_label;
	protected $submit_action;
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
	function __construct()
	{
	}
/**
 * __toString
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function __toString()	
	{
		submit_cells( 
				$this->get( "id" ),
				$this->get( "value" ),
				$this->get( "title" ),
				$this->get( "aspect" )
			);
	}
    /**
     * Set the submit label with validation.
     *
     * @throws InvalidArgumentException If the label is not a string.
 * @param mixed $label
 * @return void
 * @since v2.0.1 2026-04-14
     */
    public function set_submit_label($label)
    {
        if (!is_string($label) || empty($label)) {
            throw new InvalidArgumentException("Label must be a non-empty string.");
        }

        $this->submit_label = $label;
    }
}

