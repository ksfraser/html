<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**
 * Tables can have the following CSS elements:
 * Borders
 * Sizes
 * Headers
 * Padding and Spacing
 * Colspan and Rowspan
 * Styling
 * Colgroup
 *
 * @since v1.0.0 2026-04-11
 */
class HtmlTable extends HtmlElement
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
		$this->tag = "table";
	}

	/**
	 * Create an FA-styled table
	 *
	 * @return FaTable
 * @param mixed $faStyle
 * @param mixed $extra
 * @since v1.0.5 2026-04-14
 */
public static function createFaTable($faStyle = 2, $extra = "")
	{
		return new FaTable($faStyle, $extra);
	}
}

