<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;

/**//****************************
* Headings can have 6 levels, styles.
*
*/
class HtmlHeading extends HtmlElement
{
	//can have styles
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
	}
}
