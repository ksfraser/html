<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Formatting\HtmlFormatting;

/**
 * class HtmlEmphasize
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlEmphasize extends HtmlFormatting
{
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $data
	 * @return void
 */
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "em";
	}
}
