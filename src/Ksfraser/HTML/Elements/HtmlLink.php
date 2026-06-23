<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;

/**//****************************
* Links 
*
* <a href="URL">TEXT</a>
*/
class HtmlLink extends HtmlElement
{
	//can have styles, title
	function __construct( $data = null )
	{
		parent::__construct( $data );
		$this->tag = "a";
	}
	function addHref( $url, $text = "" )
	{
		if( is_object( $text ) )
		{
		}
		else
		if( is_string( $text) AND strlen( $text ) > 0 )
		{
			$this->nested[] = new HtmlString( $text );
		}
		else
		{
			throw new Exception( "An invalid HREF was passed in!" );
		}
		$this->addAttribute( new HtmlAttribute( "href", $url ) );
	}
	function setHref( string $url ): self
	{
		$this->addAttribute( new HtmlAttribute( "href", $url ) );
		return $this;
	}
	function setText( string $text ): self
	{
		$this->nested[] = new HtmlString( $text );
		return $this;
	}
	function setTarget( $target )
	{
		//Target can be _self, _blank, _parent, _top
		switch( $target )
		{
			case '_self':
			case '_blank':
			case '_parent':
			case '_top':
				$this->addAttribute( new HtmlAttribute( "target", $target ) );
				break;
			default:
				throw new Exception( "Target type not recognized: $target" );
		}
		return;
	}

}
