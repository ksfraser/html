<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Formatting\HtmlFormatting;

/**

 * class HtmlSmall

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlSmall extends HtmlFormatting
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
				       $this->tag = "small";
			       }
}
