<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * A Style is an attribute with KEY Style and value param:setting

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * https://www.w3schools.com/html/html_styles.asp

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Examples

 * 

 * 

 * 

 * 	background-color

 * 

 * 

 * 

 * 	color

 * 

 * 

 * 

 * 	font-family

 * 

 * 

 * 

 * 	font-size

 * 

 * 

 * 

 * 	text-align

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since 1.0.1 2026-02-16

 * @return void

 */
class HtmlStyleList implements HtmlElementInterface
{
	protected $styleArray;
/**
 * __constructor()
 *
 * @since v1.0.0 2026-04-14
 * @param HtmlStyle $style
 * @return void
 */
        function __constructor( HtmlStyle $style )
        {
                $this->addStyle( $style );
        }
/**
 * addStyle()
 *
 * @since v1.0.0 2026-04-14
 * @param HtmlStyle $style
 * @return void
 */
        function addStyle( HtmlStyle $style )
        {
                $this->styleArray[] = $style;
        }
/**
 * toHtml
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
        public function toHtml() {
                echo $this->getHtml();
        }
 
/**
 
 * getHtml()
 
 *
 
 * @since v1.0.0 2026-04-14
 
 * @return void
 
 */
	function getHtml()
	{
		if( count( $this->styleArray ) > 0 )
		{
			$html = 'style="';
		}
		else
		{
			return "";
		}
		foreach( $this->styleArray as $style )
		{
			$html .= $style->getHtml();
		}
		$html .= '"';
		return $html;
	}
}
