<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlSubscript

 *

 * @since 1.0.1 2026-02-16

 */
class HtmlSubscript extends HtmlFormatting
{
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "sub";
	}
}
