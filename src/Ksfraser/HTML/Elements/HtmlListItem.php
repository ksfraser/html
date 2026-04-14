<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * class HtmlListItem

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlListItem extends HtmlElement
{
	//Held within either an Ordered List or Unordered List
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param ?HtmlElementInterface $data
 * @return void
 */
	public function __construct(?HtmlElementInterface $data = null)
	{
		parent::__construct($data);
		$this->tag = "li";
	}
}
