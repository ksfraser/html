<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlEmptyElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlHr
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlHr extends HtmlEmptyElement
{
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param ?HtmlElementInterface $data
	 * @return void
 */
		   function __construct( ?HtmlElementInterface $data = null )
		   {
			   parent::__construct( $data );
			   $this->tag = "hr";
		   }
}
