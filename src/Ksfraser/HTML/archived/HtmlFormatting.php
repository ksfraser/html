<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * Formatting on Text.
 *
 *
 * @since 1.0.1 2026-02-16
 */
class HtmlFormatting extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param mixed $data
 * @return void
 */
	function __construct( $data )
	{
		parent::__construct( $data );
		$this->tag = "";
	}
/**
 * addAttribute
 *
 * @since 1.0.1 2026-02-16
 * @param HtmlAttribute $attribute
 * @return void
 */
	function addAttribute( HtmlAttribute $attribute )
	{
		throw new Exception( "Does HTML Formatting allow Attributes?" );
	}
/**
 * setAttributeList
 *
 * @since 1.0.1 2026-02-16
 * @param HtmlAttributeList $list
 * @return void
 */
	function setAttributeList( HtmlAttributeList $list )
	{
		throw new Exception( "Does HTML Formatting allow Attributes?" );
	}
/**
 * newAttributeList
 *
 * @since 1.0.1 2026-02-16
 * @return void
 */
	function newAttributeList()
	{
		throw new Exception( "Does HTML Formatting allow Attributes?" );
	}
}
