<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;

class HtmlInput extends HtmlElement
{
	protected $action;
	protected $method;
	function __construct( $data = null, $type = null )
	{
		parent::__construct( $data );
		$this->tag = "input";
		$this->empty = true;
		if( $type !== null ) {
			$this->addAttribute( new HtmlAttribute( "type", $type ) );
		}
	}
	function setName( string $name ): self
	{
		$this->addAttribute( new HtmlAttribute( "name", $name ) );
		return $this;
	}
	function setValue( string $value ): self
	{
		$this->addAttribute( new HtmlAttribute( "value", $value ) );
		return $this;
	}
}
