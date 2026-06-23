<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

class HtmlAttributeList implements HtmlElementInterface
{
	protected $attributeArray;
	function __construct( ?HtmlAttribute $attribute = null )
	{
		$this->attributeArray = array();
		if( $attribute !== null ) {
			$this->addAttribute( $attribute );
		}
	}
	function getAttributeArray()
	{
		return $this->attributeArray;
	}
	function addAttribute( HtmlAttribute $attribute )
	{
		$this->attributeArray[] = $attribute;
	}
	function addAttributeObject( HtmlAttribute $attribute ): self
	{
		$this->addAttribute( $attribute );
		return $this;
	}
	function setAttribute( HtmlAttribute $attribute ): void
	{
		$this->removeAttributeByName( $attribute->getName() );
		$this->addAttribute( $attribute );
	}
	function getAttributeValue( string $name ): ?string
	{
		foreach( $this->attributeArray as $attr )
		{
			if( $attr->getName() === $name )
			{
				return $attr->getValue();
			}
		}
		return null;
	}
	function removeAttributeByName( string $name ): void
	{
		foreach( $this->attributeArray as $i => $attr )
		{
			if( $attr->getName() === $name )
			{
				array_splice( $this->attributeArray, $i, 1 );
				return;
			}
		}
	}
	public function toHtml():void
	{
		echo $this->getHtml();
	}
	public function getHtml():string
	{
		$html = "";
		$count = 0;
		if( ! is_array( $this->attributeArray ) )
		{
			throw new \UnexpectedValueException( "Expected an array: " . print_r( $this->attributeArray, true ) );
		}
		foreach( $this->attributeArray as $attribute )
		{
			if( $count > 0 )
			{
				$html .= " ";
			}
			$html .= $attribute->getHtml();
			$count++;
		}
		return $html;
	}
	function countAttributeArray()
	{
		if( ! is_array( $this->attributeArray ) )
		{
			throw new \UnexpectedValueException( "Expected an array: " . print_r( $this->attributeArray, true ) );
		}
		return count( $this->attributeArray );
	}
}
	
