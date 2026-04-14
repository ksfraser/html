<?php

require_once( 'class.origin.php' );
/**
 * class VIEW_TABLE_TH
 *
 * @since v1.0.0 2025-04-23
 */
class VIEW_TABLE_TH extends origin
{
	protected $th_item;
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $value
	 * @return void
 */
	function __construct( $value = "" )
	{
		$this->th_item = array();
		$this->set( "th_item", $value );
	}
/**
	 * Function __toString
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
	function __toString()
	{
		$this->start_th();
		echo $this->th_item;
		$this->end_th();
	}
/**
	 * Function start_th
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
	function start_th()
	{
		echo "<th>";
	}
/**
	 * Function end_th
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
	function end_th()
	{
		echo "</th>";
	}
}
