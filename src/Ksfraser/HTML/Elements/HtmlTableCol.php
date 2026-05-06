<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlTableCol extends HtmlElement
{
	//specify column properties within a column group
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "col";
	}
}
