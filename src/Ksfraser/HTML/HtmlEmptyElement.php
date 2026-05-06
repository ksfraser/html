<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlNull;
use Ksfraser\HTML\HtmlElement;

class HtmlEmptyElement extends HtmlElement
{
	function __construct( $data = null )
	{
		$n = new HtmlNull();
		parent::__construct( $n ); //Empty so no data passed in
		$this->empty = true;
	}
}
