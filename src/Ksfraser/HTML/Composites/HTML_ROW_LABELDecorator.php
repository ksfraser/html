<?php

namespace Ksfraser\HTML\Composites;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HTML_ROW_LABEL;


/**
 * class HTML_ROW_LABELDecorator
 *
 * @since 1.0.1 2026-02-16
 */
class HTML_ROW_LABELDecorator implements HtmlElementInterface
{
	protected $HTML_LABEL_ROW;

/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $data
	 * @param mixed $label
	 * @param mixed $width
	 * @param mixed $class
	 * @return void
 */
	function __construct( $data, $label, $width = 25, $class = 'label' )
	{
		$this->HTML_LABEL_ROW = new HTML_ROW_LABEL( $data, $label, $width, $class );
	}

/**
 * toHtml
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
	public function toHtml(): void
	{
		$this->HTML_LABEL_ROW->toHtml();
	}

/**
 * getHtml
 *
 * @since 1.0.1 2026-02-16
 * @return string
 */
	public function getHtml(): string
	{
		return $this->HTML_LABEL_ROW->getHtml();
	}
}
