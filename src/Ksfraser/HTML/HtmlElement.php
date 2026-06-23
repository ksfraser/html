<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttributeList;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Traits\ComponentFactoryTrait;
use Ksfraser\HTML\Traits\SemanticElementsTrait;
use Ksfraser\HTML\Traits\CSSManagementTrait;
use Ksfraser\HTML\Traits\AriaAttributeTrait;
use Ksfraser\HTML\Traits\DataAttributeTrait;
use Ksfraser\HTML\Traits\ResponsiveLayoutTrait;
use Ksfraser\HTML\Traits\FormElementsTrait;
use Ksfraser\HTML\Traits\ElementIntrospectionTrait;
use Ksfraser\HTML\Traits\EventHandlerTrait;
use Ksfraser\HTML\Elements\HtmlString;

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
	use ComponentFactoryTrait,
		SemanticElementsTrait,
		CSSManagementTrait,
		AriaAttributeTrait,
		DataAttributeTrait,
		ResponsiveLayoutTrait,
		FormElementsTrait,
		ElementIntrospectionTrait,
		EventHandlerTrait;

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
	function addNested( $element ): self
	{
		if( $element instanceof HtmlElementInterface || is_string( $element ) ) {
			$this->nested[] = $element;
		}
		return $this;
	}
	function addAttribute( HtmlAttribute $attribute ):void
	{
		$this->attributeList->addAttribute( $attribute );
	}
	function addAttributeObject( HtmlAttribute $attribute ): self
	{
		$this->addAttribute( $attribute );
		return $this;
	}
	function setAttribute( string $name, $value ):self
	{
		$this->attributeList->setAttribute( new HtmlAttribute( $name, $value ) );
		return $this;
	}
	function removeAttribute( string $name ): self
	{
		$this->attributeList->removeAttributeByName( $name );
		return $this;
	}
	function setTextContent( string $text ): self
	{
		$this->nested = array( $text );
		return $this;
	}
	function setAttributeIf( bool $condition, string $name, $value ): self
	{
		if( $condition ) {
			$this->setAttribute( $name, $value );
		}
		return $this;
	}
	function appendAttribute( string $name, string $value, string $separator = ' ' ): self
	{
		$existing = $this->attributeList->getAttributeValue( $name );
		if( $existing !== null && $existing !== '' ) {
			$this->setAttribute( $name, $existing . $separator . $value );
		} else {
			$this->setAttribute( $name, $value );
		}
		return $this;
	}
	function forgetAttribute( string $name ): self
	{
		$this->attributeList->removeAttributeByName( $name );
		return $this;
	}
	function addNestedIf( bool $condition, $element ): self
	{
		if( $condition ) {
			$this->addNested( $element );
		}
		return $this;
	}
	function openTag(): string
	{
		$html = '<' . $this->tag;
		$html .= $this->getAttributes();
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
		}
		return $html;
	}
	function closeTag(): string
	{
		if( $this->empty ) return '';
		return '</' . $this->tag . '>';
	}
	function html( string $rawHtml ): self
	{
		$this->nested[] = new HtmlString( $rawHtml );
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
	function setTag( $tag ):self
	{
		$this->tag = $tag;
		return $this;
	}

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function __toString(): string
	{
		return $this->getHtml();
	}
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
		$html .= $this->renderAriaAttributes();
		$html .= $this->renderDataAttributes();
		$html .= $this->renderEventHandlers();
		return $html;
	}
}
