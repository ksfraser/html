<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

/**
 * VIEW_DATE_CELL.
 *
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_DATE_CELL extends VIEW_CELL
{
	protected $date;
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
		date_cells( 
				_($this->get( "label" ) ),
				$this->get( "f1" ),
				$this->get( "f2" ),
				$this->get( "f3" ),
				$this->get( "f4" )
			);
	}

    /**
     * Set the date with validation.
     *
     * @throws InvalidArgumentException If the date is not in a valid format.
 * @param mixed $date
 * @return void
 * @since v2.0.1 2026-04-14
     */
    public function set_date($date)
    {
        if (!strtotime($date)) {
            throw new InvalidArgumentException("Invalid date format.");
        }

        $this->date = $date;
    }
}
