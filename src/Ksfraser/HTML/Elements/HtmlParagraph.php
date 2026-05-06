<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlParagraph extends HtmlElement
{
	//can have styles
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "p";
	}
}
