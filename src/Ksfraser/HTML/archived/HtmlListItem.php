<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlListItem
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlListItem extends HtmlElement
{
	//Held within either an Ordered List or Unordered List
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
		$this->tag = "li";
	}
}
