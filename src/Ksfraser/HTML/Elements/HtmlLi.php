<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * class HtmlLi

 *

 * @since 1.0.1 2026-02-16

 */
class HtmlLi extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param string|HtmlElementInterface|null $data
 * @return void
 */
	public function __construct(string|HtmlElementInterface|null $data = null)
	{
		if (is_string($data)) {
			$data = new HtmlString($data);
		}
		parent::__construct($data ?? new HtmlString(''));
		$this->tag = 'li';
	}
}
