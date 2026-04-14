<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Buttons use Javascript

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
class HtmlButton extends HtmlElement
{
	//can have style, alt.  MUST HAVE src
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param HtmlElementInterface $data
 * @return void
 */
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "button";
	}
/**
 * setOnclick()
 *
 * @since v1.0.0 2026-04-14
 * @param HtnlAttribute $onclick
 * @return void
 */
	function setOnclick( HtnlAttribute $onclick )
	{
			//onclick="document.location='default.asp'"
		$this->addAttribute( new HtmlAttribute( "onclick", $onclick ) );
	}
}
