<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlTableRow
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlTableRow extends HtmlElement
{
	//can have styles
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
		$this->tag = "tr";
	}
}
