<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;

/**//**
* A Style is an attribute with KEY Style and value param:setting
*
*	https://www.w3schools.com/html/html_styles.asp
*
*	Examples
*		background-color
*		color
*		font-family
*		font-size
*		text-align
*
*	This is INLINE CSS.  There is also Internial CSS
*/
class HtmlStyle extends HtmlAttribute
{
	function getHtml(): string
	{
		// If value already contains quotes, avoid double quoting
		if (strpos($this->value, '"') !== false || strpos($this->value, 'style=') !== false) {
			return parent::getHtml();
		}
		// Otherwise, render as CSS property:value;
		return $this->attribute . ':' . $this->value . ';';
	}
}
