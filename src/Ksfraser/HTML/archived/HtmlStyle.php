<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * A Style is an attribute with KEY Style and value param:setting

 *

 * 

 * https://www.w3schools.com/html/html_styles.asp

 * 

 * Examples

 * 	background-color

 * 	color

 * 	font-family

 * 	font-size

 * 	text-align

 * 

 * This is INLINE CSS.  There is also Internial CSS

 * 

 *

 * @since 1.0.1 2026-02-16

 */
class HtmlStyle extends HtmlAttribute
{
/**
 * getHtml()
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
	function getHtml()
	{
		$html = $this->attribute . ':' . $this->value . ';';
		return $html;
	}
}
