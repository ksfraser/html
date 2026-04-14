<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * A trait that defines an object which can have HTML children
 *
 *
 * @author Kevin Fraser <kevin@ksfraser.ca>
 * @since 1.0.1 2026-02-16
 */
trait HTMLChildrenTrait {
	
	/**
	 * @var HtmlElementInterface[]
	 */
	protected $children = array();
	
 	/**
 	 * @return HtmlElementInterface[]
 	 * @since 1.0.1 2026-02-16
 	 */
 	public function getChildren() {
 		return $this->children;
 	}

	/**
 	 * Sets the list of children of this element.
 	 * 
 	 * @param array $children
 	 * @return $this
 * @since v1.0.5 2026-04-14
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
	 * @param HtmlElementInterface $child
	 * @return \Mouf\Html\Tags\ChildrenTrait
 * @since v1.0.0 2026-04-13
	 */
	public function addChild(HtmlElementInterface $child) {
		$this->children[] = $child;
		return $this;
	}
	
	/**
	 * Renders HTML attributes.
	 * 
	 * @return string
 * @since v1.0.0 2026-04-13
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
