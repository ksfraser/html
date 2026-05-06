<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlAttribute;
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
	
	function __construct( $data = null, $textContent = null )
	{
		//HTML is case insensitive.  XHTML etc requires lowercase.
		$this->nested = array();
		$this->tag = "";
		if( is_string( $data ) ) {
			// String first arg = tag name (e.g. new HtmlElement('div'))
			$this->tag = $data;
			if( $textContent !== null ) {
				$this->nested[] = (string) $textContent;
			}
		} elseif( $data instanceof HtmlElementInterface ) {
			$this->nested[] = $data;
		}
		$this->newAttributeList();
		$this->empty = false;
	}
//TODO - remove once testing is complete!
	function get( $attribute )
	{
		return $this->$attribute;
	}
	function addNested( $element ):void
	{
		if( $element instanceof HtmlElementInterface || is_string( $element ) ) {
			$this->nested[] = $element;
		}
	}
	function addAttribute( HtmlAttribute $attribute ):void
	{
		$this->attributeList->addAttribute( $attribute );
	}
	function setAttribute( string $name, $value ):self
	{
		$this->addAttribute( new HtmlAttribute( $name, $value ) );
		return $this;
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
					$html .= $el instanceof HtmlElementInterface ? $el->getHtml() : htmlspecialchars( (string) $el, ENT_QUOTES, 'UTF-8' );
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
