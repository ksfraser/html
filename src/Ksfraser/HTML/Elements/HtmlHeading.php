<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Headings can have 6 levels, styles.

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlHeading extends HtmlElement
{
	// Base heading element used by HtmlHeading1..6
	protected int $level = 1;

/**

 * __construct

 *

 * @since v1.0.0 2026-04-13

 * @param HtmlElementInterface $data

 * @return void

 */
	public function __construct(HtmlElementInterface $data)
	{
		parent::__construct( $data );
		$this->setTag('h' . $this->level);
	}
}
