<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * A trait that defines an object which can have HTML children

 *

 * @since 1.0.1 2026-02-16

 * @author Kevin Fraser <kevin@ksfraser.ca>

 */
trait HTMLChildrenTrait {
	
	/**
	
	 *
	
	 * @var HtmlElementInterface[]
	
	 */
	protected $children = array();
	
 	/**
	
 	 *
	
 	 * @since 1.0.1 2026-02-16
	
 	 * @return HtmlElementInterface[]
	
 	 */
 	public function getChildren() {
 		return $this->children;
 	}

	/**

	 * Sets the list of children of this element.

	 *

	 * @since v1.0.5 2026-04-14

	 * @param array $children

	 * @return $this

	 */
 	public function setChildren(array $children) {
		foreach( $children as $child )
		{
			$this->addChild( $child );
		}
		return $this;
	}
	
	/**
	
	 * Adds a child to this element.
	
	 *
	
	 * @since v1.0.0 2026-04-13
	
	 * @param HtmlElementInterface $child
	
	 * @return \Mouf\Html\Tags\ChildrenTrait
	
	 */
	public function addChild(HtmlElementInterface $child) {
		$this->children[] = $child;
		return $this;
	}
	
	/**
	
	 * Renders HTML attributes.
	
	 *
	
	 * @since v1.0.0 2026-04-13
	
	 * @return string
	
	 */
	protected function renderChildren() {
		ob_start();
		foreach ($this->children as $child) {
			if ($child != null) {
				$child->toHtml();
			}
		}
		return ob_get_clean();
	}
/**
 * renderChildrenHtml
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
	protected function renderChildrenHtml()
	{
		$html = "";
		foreach ($this->children as $child) {
			if ($child != null) {
				$html .= $child->getHtml();
			}
		}
		return $html;
	}
}
