<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;


/**


 * VIEW_AMOUNT_CELL.


 *


 * @since v1.0.0 2025-04-23


 */
class VIEW_AMOUNT_CELL extends VIEW_CELL
{
	protected $amount;
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $f1
 * @return void
 */
	function __construct( $f1 = "" )
	{
        $this->set( "f1", $f1 );
	}
/**
 * __toString()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	function __toString()	
	{
		amount_cells( 
				$this->get( "f1" ),
			);
	}
    /**
     * Set the amount with validation.
     *
     * @since v2.0.1 2026-04-14
     * @throws InvalidArgumentException If the amount is not a valid number.
     * @param mixed $amount
     * @return void
     */
    public function set_amount($amount)
    {
        if (!is_numeric($amount) || $amount < 0) {
            throw new InvalidArgumentException("Amount must be a non-negative number.");
        }

        $this->amount = $amount;
    }
}

