<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttributeList;
//require_once( 'HtmlAttributeList.php' );

/**//***************************************************************************
* An HTML element is defined by a start tag, some content, and an end tag.
*
* https://www.w3schools.com/html/html_elements.asp
*
* Elements can have nested elements
*
* @since 20250517
*
*/
class HtmlElement implements HtmlElementInterface {
	protected $tag;
	protected $nested;
	protected $empty;	//Empty elements have no DATA and no closing tag
	protected $attributeList;	//ALL elements can have attributes
	
	function __construct( HtmlElementInterface $data )
	{
		//HTML is case insensitive.  XHTML etc requires lowercase.
		$this->nested = array();
		$this->addNested( $data );
		$this->newAttributeList();
		$this->empty = false;
		$this->tag = "";
	}
//TODO - remove once testing is complete!
	function get( $attribute )
	{
		return $this->$attribute;
	}
	function addNested( HtmlElementInterface $element ):void
	{
		$this->nested[] = $element;
	}
	function addAttribute( HtmlAttribute $attribute ):void
	{
		$this->attributeList->addAttribute( $attribute );
	}
	function setAttributeList( HtmlAttributeList $list ):void
	{
		$this->attributeList = $list;
	}
	function newAttributeList():void
	{
		if( isset( $this->attributeList ) )
		{
			unset( $this->attributeList );
		}
		$this->attributeList = new HtmlAttributeList( new HtmlAttribute( "", "") );
	}
	function getTag():string
	{
		return $this->tag;
	}
	function setTag( $tag ):void
	{
		$this->tag = $tag;
	}

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml():void 
	{
		echo $this->getHtml();
	}
	public function getHtml():string
	{
		$html = '<' . $this->tag;
		$html .=  $this->getAttributes();
		$html .= '>';
		if( ! $this->empty )
		{
			if( isset( $this->nested ) )
			{
				foreach( $this->nested as $el )
				{
					$html .= $el->getHtml();
				}
			}
			$html .= '</' . $this->tag . '>';
		}
		return $html;
	}
	/**//**************************************
	* Convert attribute objects to HTML string
	**/
	protected function getAttributes():string
	{
		$html = "";
		$html .= $this->attributeList->getHtml();
		return $html;
	}
}
