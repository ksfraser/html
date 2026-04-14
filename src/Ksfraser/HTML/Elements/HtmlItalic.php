<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Formatting\HtmlFormatting;

/**
 * class HtmlItalic
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlItalic extends HtmlFormatting
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param HtmlElementInterface $data
 * @return void
 */
			       function __construct(HtmlElementInterface $data)
			       {
				       parent::__construct($data);
				       $this->tag = "i";
			       }
}
