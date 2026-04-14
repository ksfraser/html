<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlTableCol

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlTableCol extends HtmlElement
{
	//specify column properties within a column group
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
		$this->tag = "col";
	}
}
