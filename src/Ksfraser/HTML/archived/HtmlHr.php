<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlHr
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlHr extends HtmlEmptyElement
{
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $data
	 * @return void
 */
	function __construct( $data = "" )
	{
		parent::__construct( "" );
		$this->tag = "hr";
	}
}
