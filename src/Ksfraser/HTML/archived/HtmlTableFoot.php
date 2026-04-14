<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTableFoot
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlTableFoot extends HtmlElement
{
	//can have styles
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param HtmlElementInterface $data
	 * @return void
 */
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "tfoot";
	}
}
