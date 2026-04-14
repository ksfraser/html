<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;
/**
 * URL Links
 *
 * <a href="URL">TEXT</a>
 *
 * @since v1.0.0 2026-04-11
 */

class HtmlA extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $data
 * @param ?HtmlElementInterface $maybeContent
 * @return void
 */
	public function __construct(HtmlElementInterface $data, ?HtmlElementInterface $maybeContent = null)
	{
		// Support both single-arg construction (content only) and two-arg form
		// (first arg may be href text, second arg is content).
		if ($maybeContent !== null) {
			// If first arg is a string wrapper, use its text as href
			if ($data instanceof HtmlString) {
				$this->setHref($data->getHtml());
			}
			$content = $maybeContent;
		} else {
			$content = $data;
		}


		parent::__construct($content);
		$this->tag = 'a';
	}
	/**
	 * Set href attribute
	 *
	 * @param string $url
	 * @return self
 * @since v1.0.0 2026-04-13
	 */
	public function setHref( string $url ): self
	{
		$this->setAttribute( 'href', $url );
		return $this;
	}

	/**
	 * Set link text (replaces nested content)
	 *
	 * @param string $text
	 * @return self
 * @since v1.0.0 2026-04-13
	 */
	public function setText( string $text ): self
	{
		$this->nested = array( new HtmlString( $text ) );
		return $this;
	}
	
	/**
	 * Set link content (replaces nested content)
	 *
	 * @param HtmlElementInterface $content
	 * @return self
 * @since v1.0.0 2026-04-13
	 */
	public function setContent( HtmlElementInterface $content ): self
	{
		$this->nested = array( $content );
		return $this;
	}
/**
 * addHref
 *
 * @since v1.0.0 2026-04-11
 * @param mixed $url
 * @param mixed $text
 * @return void
 */
	function addHref( $url, $text = "" )
	{
		$this->setHref( (string)$url );
		if( $text instanceof HtmlElementInterface )
		{
			$this->setContent( $text );
			return;
		}
		if( is_string( $text ) && strlen( $text ) > 0 )
		{
			$this->setText( $text );
			return;
		}
		throw new \InvalidArgumentException( "An invalid HREF was passed in!" );
	}
	/**
	 * Set link target and return self for fluent interface
	 *
	 * @param string $target
	 * @return self
 * @since v1.0.0 2026-04-13
	 */
	public function setTarget( string $target ): self
	{
		//Target can be _self, _blank, _parent, _top
		switch( $target )
		{
			case '_self':
			case '_blank':
			case '_parent':
			case '_top':
				$this->setAttribute( "target", (string)$target );
				break;
			default:
				throw new \InvalidArgumentException( "Target type not recognized: $target" );
		}

		return $this;
	}

}

