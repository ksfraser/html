<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * class HtmlOrderedList
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlOrderedList extends HtmlElement
{
	// Can accept array of items or HtmlElementInterface
/**
	 * Function __construct
	 *
	 * @since v1.0.0 2026-04-14
	 * @param mixed $data
	 * @return void
 */
	function __construct($data)
	{
		parent::__construct();
		$this->tag = "ol";
		if (is_array($data)) {
			foreach ($data as $item) {
				if ($item instanceof HtmlElementInterface) {
					$this->addNested($item);
				} else {
					$this->addNested(new HtmlListItem(new HtmlString((string)$item)));
				}
			}
		} elseif ($data instanceof HtmlElementInterface) {
			$this->addNested($data);
		}
	}
}
