<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlTableBody

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
class HtmlTableBody extends HtmlElement
{
	//can have styles
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param ?HtmlElementInterface $data
 * @return void
 */
	function __construct( ?HtmlElementInterface $data = null )
	{
		parent::__construct( $data );
		$this->tag = "tbody";
	}
}
