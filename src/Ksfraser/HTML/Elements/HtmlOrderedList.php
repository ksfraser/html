<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlOrderedList extends HtmlElement
{
	//can have styles
	function __construct( $data = null )
	{
		parent::__construct( $data );
		$this->tag = "ol";
	}
}
