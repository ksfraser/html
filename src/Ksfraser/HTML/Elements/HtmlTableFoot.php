<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTableFoot
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlTableFoot extends HtmlElement
{
	//can have styles
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
		$this->tag = 'tfoot';
	}
}
