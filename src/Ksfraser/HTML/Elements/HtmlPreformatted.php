<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlPreformatted
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlPreformatted extends HtmlElement
{
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
		       $this->tag = "pre";
	       }
}
