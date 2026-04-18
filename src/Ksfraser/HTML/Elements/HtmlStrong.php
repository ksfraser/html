<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Formatting\HtmlFormatting;

/**

 * class HtmlStrong

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
class HtmlStrong extends HtmlFormatting
{
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param HtmlElementInterface $data
 * @return void
 */
			       function __construct(HtmlElementInterface $data)
			       {
				       parent::__construct($data);
				       $this->tag = "strong";
			       }
}
