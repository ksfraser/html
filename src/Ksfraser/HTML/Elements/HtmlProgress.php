<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**

 * class HtmlProgress

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlProgress extends HtmlElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param \Ksfraser\HTML\HtmlElementInterface $content
 * @return void
 */
	public function __construct(\Ksfraser\HTML\HtmlElementInterface $content) {
		parent::__construct($content);
		$this->setTag('progress');
	}
}
