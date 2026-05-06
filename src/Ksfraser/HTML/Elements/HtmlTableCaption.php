<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

class HtmlTableCaption extends HtmlElement
{
	//After <table> but before rows
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "caption";
	}
}
