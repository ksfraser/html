<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

class HtmlAttributeList implements HtmlElementInterface
{
	protected $attributeArray;
	function __construct( HtmlAttribute $attribute )
	{
		$this->attributeArray = array();
		$this->addAttribute( $attribute );
	}
	function getAttributeArray()
	{
		return $this->attributeArray;
	}
	function addAttribute( HtmlAttribute $attribute )
	{
		$this->attributeArray[] = $attribute;
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
	
