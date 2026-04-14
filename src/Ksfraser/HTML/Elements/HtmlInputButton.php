<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlEmptyElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\HtmlAttribute;

/**

 * Base class for button-type input elements

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Abstract base class for HTML input elements of type button, submit, and reset.

 * 

 * 

 * 

 * These elements share common behavior: they're self-closing, have a value attribute

 * 

 * 

 * 

 * for their label, and support common button attributes.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * ```php

 * 

 * 

 * 

 * $submit = new HtmlInputButton("submit", new HtmlString("Save"));

 * 

 * 

 * 

 * $submit->setName("save_btn")->setClass("btn btn-primary");

 * 

 * 

 * 

 * echo $submit->getHtml();

 * 

 * 

 * 

 * // Output: <input type="submit" value="Save" name="save_btn" class="btn btn-primary" />

 * 

 * 

 * 

 * ```

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Design Patterns:

 * 

 * 

 * 

 * - **Template Method**: Defines structure for button-type inputs

 * 

 * 

 * 

 * - **Builder**: Fluent interface for setting attributes

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * SOLID Principles Applied:

 * 

 * 

 * 

 * - **Single Responsibility**: Handles only button-type input generation

 * 

 * 

 * 

 * - **Open/Closed**: Open for extension (subclasses), closed for modification

 * 

 * 

 * 

 * - **Liskov Substitution**: Can be used anywhere HtmlEmptyElement is expected

 * 

 * 

 * 

 * - **Interface Segregation**: Implements HtmlElementInterface appropriately

 * 

 * 

 * 

 * - **Dependency Inversion**: Depends on HtmlElementInterface abstraction

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @package Ksfraser\HTML

 * @example 

 * @return void

 */
class HtmlInputButton extends HtmlEmptyElement
{
	/**
	 * The label/text displayed on the button
	 *
	 * @var HtmlElementInterface
	 * @return void
	 */
	protected $label;

	/**

	 * The type of button (submit, reset, button)

	 *

	 * @var string

	 * @return void

	 */
	protected $buttonType;

	/**

	 * Constructor

	 *

	 * @since v1.0.0 2026-04-11

	 * @param string $type The input type (submit, reset, button)

	 * @param HtmlElementInterface $label The button label/text

	 * @return void

	 */
	public function __construct( string $type, HtmlElementInterface $label )
	{
		// Manual initialization to avoid parent constructor issues
		$this->label = $label;
		$this->buttonType = $type;
		$this->nested = array();
		$this->empty = true;
		$this->tag = "input";
		$this->newAttributeList();
		$this->setAttribute( "type", $type );
	}

	/**

	 * Set the input type attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $type

	 * @return self

	 */
	public function setType( string $type ): self
	{
		$this->buttonType = $type;
		$this->setAttribute( 'type', $type );
		return $this;
	}

	/**

	 * Set the name attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $name The name for form submission

	 * @return self Fluent interface

	 */
	public function setName( string $name ): self
	{
		$this->setAttribute( "name", $name );
		return $this;
	}

	/**

	 * Set the id attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $id The unique element identifier

	 * @return self Fluent interface

	 */
	public function setId( string $id ): self
	{
		$this->setAttribute( "id", $id );
		return $this;
	}

	/**

	 * Set the class attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $class CSS class name(s)

	 * @return self Fluent interface

	 */
	public function setClass( string $class ): self
	{
		$this->setAttribute( "class", $class );
		return $this;
	}

	/**

	 * Set or unset the disabled attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param bool $disabled Whether to set disabled (true) or remove it (false)

	 * @return self Fluent interface

	 */
	public function setDisabled(bool $disabled = true): self
	{
		if ($disabled) {
			$this->setAttribute("disabled", "disabled");
		} else {
			$this->removeAttribute("disabled");
		}
		return $this;
	}

	/**

	 * Get the HTML string representation

	 *

	 * @since v1.0.0 2026-04-13

	 * @return string The complete HTML input tag

	 */
	public function getHtml(): string
	{
		// Set the value attribute from the label (already escaped by HtmlString)
		$labelText = $this->label->getHtml();
		$this->setAttribute( "value", $labelText );

		// Build the input tag
		$html = "<" . $this->tag;
		$html .= " " . $this->attributeList->getHtml();
		$html .= " />";

		return $html;
	}
}
