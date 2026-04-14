<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlEmptyElement;

/**

 * class HtmlWbr

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlWbr extends HtmlEmptyElement {
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $data
 * @return void
 */
	public function __construct($data = null) {
		parent::__construct($data);
		$this->setTag('wbr');
	}
}
