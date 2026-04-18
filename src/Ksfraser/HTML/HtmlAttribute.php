<?php

namespace Ksfraser\HTML;

use Ksfraser\HTML\HtmlElementInterface;


/**


 * class HtmlAttribute


 *


 * @since 1.0.1 2026-02-16


 * @return void


 */
/**
 * HtmlAttribute
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlAttribute implements HtmlElementInterface
{
	/**
	 * /**********
	 *
	 * 
	 * 
	 * Common attributes:
	 * Class
	 * 	Can be repeated amongst elements
	 * ID
	 * 	ID must be used uniquely
	 * Style
	 * 
	 * 
	 *
	 * @return void
	 */
	protected $attribute;	//Key
	protected $value;	//Value
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
	/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $attribute
 * @param mixed $value
 * @return void
 */
function __construct( $attribute, $value )
	{
		// Valid HTML attribute name: must start with a letter and contain only letters, digits, hyphens, or underscores
		if (!preg_match('/^[A-Za-z][A-Za-z0-9_-]*$/', $attribute)) {
			throw new \InvalidArgumentException("Invalid attribute name: must start with a letter and contain only letters, digits, hyphens, or underscores.");
		}
		$this->attribute = $attribute;
		$this->value = $value;
	}
	/**
	 * Output the HTML string directly
	 *
	 * @since v1.0.0 2026-04-13
	 * @return void
	 */
	public /**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @return void
 */
/**
 * toHtml
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
function toHtml(): void {
		echo $this->getHtml();
	}
	/**
	 * Get the HTML string for this attribute
	 *
	 * @since v1.0.0 2026-04-13
	 * @return string The attribute in format: name="value"
	 */
	public /**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @return string
 */
/**
 * getHtml
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getHtml(): string {
		if (strlen($this->attribute) > 0) {
			$value = $this->value;
			if (is_object($value) && method_exists($value, 'getHtml')) {
				$value = $value->getHtml();
			} else {
				$value = (string)$value;
			}
			$html = $this->attribute . '="' . $value . '"';
			return $html;
		}
		return "";
	}

/**

 * getName

 *

 * @since 1.0.1 2026-02-16

 * @return string

 */
    public /**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @return string
 */
/**
 * getName
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getName(): string
    {
        return $this->attribute;
    }

/**

 * getValue

 *

 * @since 1.0.1 2026-02-16

 * @return string

 */
    public /**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @return string
 */
/**
 * getValue
 *
 * @since v1.0.0 2026-04-14
 * @return string
 */
function getValue(): string
    {
		$value = $this->value;
		if (is_object($value) && method_exists($value, 'getHtml')) {
			return $value->getHtml();
		}
		return (string)$value;
    }
}
