<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Formatting\HtmlFormatting;

/**
 * class HtmlSuperscript
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlSuperscript extends HtmlFormatting
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param ?HtmlElementInterface $data
 * @return void
 */
		       function __construct( ?HtmlElementInterface $data = null )
		       {
			       parent::__construct( $data );
			       $this->tag = "sup";
		       }
}
