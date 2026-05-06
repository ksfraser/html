<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlTitle extends HtmlElement
{
	//can have styles
	//Only belongs in the HEAD
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "title";
	}
}
