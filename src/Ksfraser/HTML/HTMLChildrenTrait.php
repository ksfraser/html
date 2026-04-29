<?php
namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * A trait that defines an object which can have HTML children
 * 
 * @author Kevin Fraser <kevin@ksfraser.ca>
 */
trait HTMLChildrenTrait {
	
	/**
	 * @var HtmlElementInterface[]
	 */
	protected $children = array();
	
	/**
	 * @return HtmlElementInterface[]
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Sets the list of children of this element.
	 * 
	 * @param HtmlElementInterface[] $children
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
	 * @param HtmlElementInterface $child
	 * @return \Mouf\Html\Tags\ChildrenTrait
	 */
	public function addChild(HtmlElementInterface $child) {
		$this->children[] = $child;
		return $this;
	}

	/**
	 * Prepends a child before all existing children on this element.
	 *
	 * @param HtmlElementInterface $child
	 * @return $this
	 */
	public function prependChild(HtmlElementInterface $child) {
		array_unshift($this->children, $child);
		return $this;
	}

	/**
	 * Conditionally add a child. When $condition is false, this is a no-op.
	 *
	 * @param bool                 $condition Add the child only when true
	 * @param HtmlElementInterface $child
	 * @return $this
	 */
	public function addChildIf(bool $condition, HtmlElementInterface $child) {
		if ($condition) {
			$this->addChild($child);
		}
		return $this;
	}

	/**
	 * Map each item in $items through $mapper and add the result as a child.
	 *
	 * @param array    $items  Items to map
	 * @param callable $mapper Callable(mixed $item): HtmlElementInterface
	 * @return $this
	 */
	public function children(array $items, callable $mapper) {
		foreach ($items as $item) {
			$this->addChild($mapper($item));
		}
		return $this;
	}
	
	/**
	 * Renders HTML attributes.
	 * 
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
