<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**

 * class HtmlQ

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
class HtmlQ extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param \Ksfraser\HTML\HtmlElementInterface $content
 * @return void
 */
	public function __construct(\Ksfraser\HTML\HtmlElementInterface $content) {
		parent::__construct($content);
		$this->setTag('q');
	}
}
