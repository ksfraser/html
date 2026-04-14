<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlDescriptionList
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlDescriptionList extends HtmlElement
{
	//Held within either an Ordered List or Unordered List
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
		$this->tag = "dl";
	}
}
