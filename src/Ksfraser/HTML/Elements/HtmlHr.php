<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlEmptyElement;

class HtmlHr extends HtmlEmptyElement
{
	function __construct( $data = "" )
	{
		parent::__construct( "" );
		$this->tag = "hr";
	}
}
