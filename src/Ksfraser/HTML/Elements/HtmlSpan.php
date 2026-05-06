<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlSpan extends HtmlElement
{
	//can have styles
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "span";
	}
}

