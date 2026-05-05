<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/***********************
* Tables can have the following CSS elements:
*	Borders
*	Sizes
*	Headers
*	Padding and Spacing
*	Colspan and Rowspan
*	Styling
*	Colgroup
*/
class HtmlTable extends HtmlElement
{
	//can have styles
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "table";
	}
	//Do we need appendRow?  Or does HtmlElement handle that?
	//How about setting Attributes such as width, style?
}
