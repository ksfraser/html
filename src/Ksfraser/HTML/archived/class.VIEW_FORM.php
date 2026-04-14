<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

/**
 * VIEW_FORM.
 *
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_FORM extends origin
{
	protected $form_item_array;
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @return void
 */
	function __construct(  )
	{
        
		$this->form_item_array = array();
	}
/**
 * __toString
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function __toString()
	{
		$this->start_form();
		foreach( $this->form_item_array as $obj )
		{
			echo $obj;
		}
		$this->end_form();
	}
/**
 * start_form
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function start_form()
	{
		start_form();
	}
/**
 * end_form
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function end_form()
	{
		end_form();
	}
    /**
     * Add an item to the form with validation.
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

        $this->form_item_array[] = $item;
    }
}
