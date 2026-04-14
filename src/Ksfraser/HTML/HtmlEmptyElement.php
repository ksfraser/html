<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * HTML Empty Element

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Empty elements have no content and no closing tag.

 * 

 * 

 * 

 * Examples: <input>, <br>, <hr>, <img>

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML

 * @return void

 */
class HtmlEmptyElement extends HtmlElement
{
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
	function __construct( $data = null )
	{
		// Empty elements don't have children - pass empty HtmlString
		parent::__construct( new HtmlString("") );
		$this->empty = true;
	}
}
