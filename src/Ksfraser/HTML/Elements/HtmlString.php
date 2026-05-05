<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**//*******************************************
* This class is a simple wrapper for 
* a string to implement the HtmlElementInterface.
*
**/
class HtmlString implements HtmlElementInterface 
{

	//protected string $string;
	protected $string;

	public function __construct( $string )
	{
		$this->string = $string;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml():void {
		echo $this->getHtml();
	}
	public function getHtml():string
	{
		//A HTML string doesn't have tags, attributes, styles, etc.
		$html = $this->string;
		return $html;
		//Claude is recommending this function be:
		//return htmlspecialchars($this->string, ENT_QUOTES, 'UTF-8');
	}
}
