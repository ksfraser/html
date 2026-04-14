<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * Headings can have 6 levels, styles.
 *
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlHeading6 extends HtmlHeading
{
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param HtmlElementInterface $data
	 * @return void
 */
	function __construct( HtmlElementInterface $data )
	{
		parent::__construct( $data );
		$this->tag = "h6";
	}
}
