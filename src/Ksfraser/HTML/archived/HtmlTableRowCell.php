<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTableRowCell
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlTableRowCell extends HtmlElement
{
	//can have styles
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param HtmlElementInterface $data
 * @return void
 */
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "td";
	}
}
