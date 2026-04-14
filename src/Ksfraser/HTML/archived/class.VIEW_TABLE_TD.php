<?php

namespace Ksfraser\HTML;

use Ksfraser\Origin\origin;

/**
 * VIEW_TABLE_TD.
 *
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_TABLE_TD extends origin
{
	protected $td_content;
	protected $td_class;
	protected $td_item;
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $value
 * @return void
 */
	function __construct( $value = "" )
	{
		$this->td_item = $value;
	}
/**
 * __toString
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function __toString()
	{
		$this->start_td();
		echo $this->td_item;
		$this->end_td();
	}
/**
 * start_td
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function start_td()
	{
		echo "<td>";
	}
/**
 * end_td
 *
 * @since v1.0.0 2025-04-23
 * @return void
 */
	function end_td()
	{
		echo "</td>";
	}
    /**
     * Set the content of the table cell with validation.
     *
     * @throws InvalidArgumentException If the content is not a string.
 * @param mixed $content
 * @return void
 * @since v2.0.1 2026-04-14
     */
    public function set_content($content)
    {
        if (!is_string($content)) {
            throw new InvalidArgumentException("Content must be a string.");
        }

        $this->td_content = $content;
    }
}
