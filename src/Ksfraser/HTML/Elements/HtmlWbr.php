<?php
namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

class HtmlWbr extends HtmlElement {
	public function __construct(\Ksfraser\HTML\HtmlElementInterface $content = null) {
		parent::__construct($content);
		$this->setTag('wbr');
		$this->empty = true;
	}
}
