<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlInternalCSSList
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlInternalCSSList extends HtmlStyleList 
{
 
/**
	 * Function getHtml
	 *
	 * @since v1.0.0 2026-04-14
	 * @return void
 */
	function getHtml()
	{
		if( count( $this->styleArray ) > 0 )
		{
			$html = $this->tag . '{';
		}
		else
		{
			return "";
		}
		foreach( $this->styleArray as $style )
		{
			$html .= $style->getHtml();
		}
		$html .= '}\n\r';
		return $html;
	}
}
