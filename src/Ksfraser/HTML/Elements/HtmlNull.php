<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**//***************************************************************************
* An HTML element is defined by a start tag, some content, and an end tag.
*
* https://www.w3schools.com/html/html_elements.asp
*
* Elements can have nested elements
*
* @since 20250617
*
*/
class HtmlNull implements HtmlElementInterface {
	
	function __construct()
	{
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
		return "";
	}
}
