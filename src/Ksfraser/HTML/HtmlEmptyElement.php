<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlNull;

class HtmlEmptyElement extends HtmlElement
{
	function __construct( $data = null )
	{
		$n = new HtmlNull();
		parent::__construct( $n ); //Empty so no data passed in
		$this->empty = true;
	}
}
