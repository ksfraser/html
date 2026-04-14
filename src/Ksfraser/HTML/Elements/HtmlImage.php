<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlImage
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlImage extends HtmlElement
{
	//can have style, alt.  MUST HAVE src
	//  Width and Height can be either part of Style, or attributes themselves
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param string|HtmlElementInterface|null $data
 * @return void
 */
	public function __construct(string|HtmlElementInterface|null $data = null)
	{
		if (is_string($data)) {
			$data = new HtmlString($data);
		}
		parent::__construct($data ?? new HtmlString(''));
		// If a simple HtmlString was provided, treat it as the src URL
		if ($data instanceof \Ksfraser\HTML\Elements\HtmlString) {
			$raw = html_entity_decode($data->getHtml(), ENT_QUOTES, 'UTF-8');
			if ($raw !== '') {
				$this->setSrc($raw);
			}
		}
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
		$this->addAttributeObject( new \Ksfraser\HTML\HtmlAttribute( "src", $src ) );
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
		$this->addAttributeObject( new \Ksfraser\HTML\HtmlAttribute( "alt", $alt ) );
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
		$this->addAttributeObject( new \Ksfraser\HTML\HtmlAttribute( "height", $height ) );
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
		$this->addAttributeObject( new \Ksfraser\HTML\HtmlAttribute( "width", $width ) );
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
			   $s = new \Ksfraser\HTML\HtmlStyleList();
			   $s->addStyle( $w );
			   $s->addStyle( $h );
			  $this->addAttribute('style', $s);
	}
}
