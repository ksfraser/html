<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

require_once( 'class.VIEW_CELL.php' );
/**
 * VIEW_SUBMIT_CELL.
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
/**
 * VIEW_SUBMIT_CELL
 *
 * @since v1.0.0 2026-04-14
 * @return void
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
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function __construct()
	{
	}
/**
 * __toString()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @return void
 */
/**
 * __toString
 *
 * @since v1.0.0 2026-04-14
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
     * @since v2.0.1 2026-04-14
     * @throws InvalidArgumentException If the label is not a string.
     * @param mixed $label
     * @return void
     */
    public /**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @param mixed $label
 * @return void
 */
/**
 * set_submit_label
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $label
 * @return void
 */
function set_submit_label($label)
    {
        if (!is_string($label) || empty($label)) {
            throw new InvalidArgumentException("Label must be a non-empty string.");
        }

        $this->submit_label = $label;
    }
}

