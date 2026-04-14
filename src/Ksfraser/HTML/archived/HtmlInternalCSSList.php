<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlInternalCSSList
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlInternalCSSList extends HtmlStyleList 
{
 
/**
 * getHtml
 *
 * @since v1.0.5 2026-04-14
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
