<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlImage
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlImage extends HtmlElement
{
	//can have style, alt.  MUST HAVE src
	//  Width and Height can be either part of Style, or attributes themselves
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param HtmlElementInterface $data
	 * @return void
 */
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "img";
	}
/**
	 * Function setSrc
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $src
	 * @return void
 */
	function setSrc( $src )
	{
		$this->addAttribute( new HtmlAttribute( "src", $src ) );
	}
/**
	 * Function setAlt
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $alt
	 * @return void
 */
	function setAlt( $alt )
	{
		$this->addAttribute( new HtmlAttribute( "alt", $alt ) );
	}
	// Either attributes or STYLE can be used to set the size
	//	However stylesheets can be used to change the size
	//	except when we use STYLE (see set size below)
/**
	 * Function setHeight
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $height
	 * @return void
 */
	function setHeight( $height )
	{
		$this->addAttribute( new HtmlAttribute( "height", $height ) );
	}
/**
	 * Function setWidth
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $width
	 * @return void
 */
	function setWidth( $width )
	{
		$this->addAttribute( new HtmlAttribute( "width", $width ) );
	}
/**
	 * Function setSize
	 *
	 * @since v1.0.0 2026-04-14
	 * @param int $width
	 * @param int $height
	 * @return void
 */
	function setSize( int $width, int $height )
	{
			   $w = new HtmlStyle( "width", $width . "px" );
			   $h = new HtmlStyle( "height", $height . "px" );
			   $s = new HtmlStyleList();
			   $s->addStyle( $w );
			   $s->addStyle( $h );
			   $this->addAttribute( 'style', $s );
	}
}
