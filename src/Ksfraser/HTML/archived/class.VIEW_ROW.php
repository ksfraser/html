<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

/**
 * VIEW_ROW.
 *
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_ROW extends origin
{
	protected $row_data;
	protected $row_class;
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
	function __construct()
	{
        
		$this->row_item_array = array();
	}
/**
 * __toString
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function __toString()
	{
		$this->start_row();
		foreach( $this->row_item_array as $obj )
		{
			echo $obj;
		}
		$this->end_row();
	}
/**
 * start_row
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function start_row()
	{
		start_row();
	}
/**
 * end_row
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function end_row()
	{
		end_row();
	}
    /**
     * Add an item to the row with validation.
     *
     * @throws InvalidArgumentException If the item is not an object.
 * @param mixed $item
 * @return void
 * @since v2.0.1 2026-04-14
     */
    public function add_item($item)
    {
        if (!is_object($item)) {
            throw new InvalidArgumentException("Item must be an object.");
        }

        $this->row_item_array[] = $item;
    }
}
