<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Class for generating forms

 *

 * 

 * https://www.w3schools.com/tags/tag_form.asp

 * 

 * Forms can have the following elements:

 * input

 * textarea

 * button

 * select

 * option

 * optgroup

 * fieldset

 * label

 * output

 * 

 * Forms can have the following attributes

 * accept-charset

 * action

 * autocomplete (on/off)

 * enctype

 * method (dialog, get, post)

 * name

 * novalidate

 * rel

 * 	external

 * 	help

 * 	license

 * 	next

 * 	nofollow

 * 	noopener

 * 	noreferrer

 * 	opener

 * 	prev

 * 	search

 * target

 * 	_blank

 * 	_self

 * 	_parent

 * 	_top

 *  * Provides helpers for building HTML <form> elements and common validations.

 *

 * @since v1.0.0 2026-04-11

 * @link https://www.w3schools.com/tags/tag_form.asp

 */

class HtmlForm extends HtmlElement
{
	protected $action;
	protected $method;

/**

 * __construct

 *

 * @since v1.0.0 2026-04-13

 * @param mixed $data

 * @return void

 */
	public function __construct($data = null)
	{
		parent::__construct($data);
		$this->tag = "form";
	}

	/**

	 * Set the form method attribute (GET or POST)

	 *

	 * @since v1.0.0 2026-04-13

	 * @throws \InvalidArgumentException If method is not valid

	 * @param string $method HTTP method (get, post)

	 * @return self Fluent interface

	 */
	public function setMethod(string $method): self {
		$valid = ['get', 'post'];
		$methodLower = strtolower($method);
		if (!in_array($methodLower, $valid, true)) {
			throw new \InvalidArgumentException("Invalid form method: '$method'. Only 'get' and 'post' are allowed.");
		}
		$this->addAttributeObject(new \Ksfraser\HTML\HtmlAttribute('method', $methodLower));
		return $this;
	}

	/**

	 * Set the form action attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @throws \InvalidArgumentException If action is not valid

	 * @param string $action Form action URL

	 * @return self Fluent interface

	 */
	public function setAction(string $action): self {
		// Basic validation: must be a non-empty string
		if (trim($action) === '') {
			throw new \InvalidArgumentException("Invalid form action: must be a non-empty string.");
		}
		$this->addAttributeObject(new \Ksfraser\HTML\HtmlAttribute('action', htmlspecialchars($action)));
		return $this;
	}

	/**

	 * Set the form id attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @throws \InvalidArgumentException If id is not valid

	 * @param string $id Form id

	 * @return self Fluent interface

	 */
	public function setId(string $id): self {
		// Valid HTML id: letters, digits, hyphens, underscores, no spaces, not empty
		if (!preg_match('/^[A-Za-z][A-Za-z0-9_-]*$/', $id)) {
			throw new \InvalidArgumentException("Invalid form id: must start with a letter and contain only letters, digits, hyphens, or underscores.");
		}
		$this->addAttributeObject(new \Ksfraser\HTML\HtmlAttribute('id', $id));
		return $this;
	}

	/**

	 * Append child elements (form fields) to the form

	 *

	 * @since v1.0.5 2026-04-14

	 * @param mixed $elements

	 * @return self Fluent interface

	 */
public function append(...$elements): self {
		foreach ($elements as $element) {
			if ($element instanceof \Ksfraser\HTML\HtmlElementInterface) {
				$this->addNested($element);
			} elseif (method_exists($element, 'getHtmlElement')) {
				$this->addNested($element->getHtmlElement());
			}
		}
		return $this;
	}

	/**

	 * Get HTML representation as string

	 *

	 * @since v1.0.0 2026-04-13

	 * @return string The complete HTML form element

	 */
	public function getHtml(): string {
		return parent::getHtml();
	}

	/**

	 * Render the form to HTML string

	 *

	 * @since v1.0.0 2026-04-13

	 * @return string The complete HTML form element

	 */
	public function render(): string {
		return $this->getHtml();
	}
}

