<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlEmptyElement;

class HtmlBr extends HtmlEmptyElement
{
	function __construct( $data = null )
	{
		//As BR is an empty tag, we are going to ignore the passed in data.
		//Should we accept a string of data that should follow this tag?  ie ->string->br->string ... ?
		//EmptyElement accepts a null
		parent::__construct();
		$this->tag = "br /";
	}
}
