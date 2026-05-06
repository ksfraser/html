<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlPreformatted extends HtmlElement
{
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "pre";
	}
}
