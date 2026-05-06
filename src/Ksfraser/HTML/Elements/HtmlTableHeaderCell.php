<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlTableHeaderCell extends HtmlElement
{
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "th";
	}
}
