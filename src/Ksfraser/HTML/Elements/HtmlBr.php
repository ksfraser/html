<?php
namespace Ksfraser\HTML\Elements;

// TODO: Create English human-readable wrappers for tags such as HtmlBreak (wraps HtmlBr), HtmlBold (wraps HtmlB), HtmlItalics (wraps HtmlI), etc. to improve semantic clarity and usability for coders unfamiliar with raw HTML tag names.

use Ksfraser\HTML\HtmlEmptyElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlBr

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlBr extends HtmlEmptyElement
{
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
	function __construct( $data = "" )
	{
		parent::__construct( "" );
		$this->tag = "br";
	}
}
