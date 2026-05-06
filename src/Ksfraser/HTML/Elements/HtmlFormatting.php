<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\HtmlAttributeList;

/**//*********************************************
* Formatting on Text.
*
* @since 20250517
*/
class HtmlFormatting extends HtmlElement
{
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "";
	}
	function addAttribute( HtmlAttribute $attribute ): void
	{
		throw new \Exception( "Does HTML Formatting allow Attributes?" );
	}
	function setAttributeList( HtmlAttributeList $list ): void
	{
		throw new \Exception( "Does HTML Formatting allow Attributes?" );
	}
	function newAttributeList(): void
	{
		throw new \Exception( "Does HTML Formatting allow Attributes?" );
	}
}
