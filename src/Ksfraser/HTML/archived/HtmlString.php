<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlString

 *

 * @since 1.0.1 2026-02-16

 */
class HtmlString implements HtmlElementInterface {
	protected $string;
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $string
 * @return void
 */
	function __construct( $string )
	{
		$this->string = $string;
	}
	/**
	 * Renders the object in HTML.
	 *
	 * The Html is echoed directly into the output.
	 *
	 * @since v1.0.5 2026-04-14
	 * @return void
	 */
	public function toHtml() {
		echo $this->getHtml();
	}
/**
 * getHtml
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
	public function getHtml()
	{
		//A HTML string doesn't have tags, attributes, styles, etc.
		$html = $this->string;
		return $html;
	}
}
