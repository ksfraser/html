<?php

namespace Ksfraser\HTML\HTMLAtomic;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * Email Links

 *

 * 

 * Creates: <a href="mailto:email@example.com">LINK TEXT</a>

 * 

 * Email addresses are validated and automatically prefixed with "mailto:"

 * Extends HtmlA since email links are just specialized anchor tags

 * 

 *

 * @since 1.0.1 2026-02-16

 */
class HtmlEmail extends HtmlA
{
/**
 * __construct()
 *
 * @since v1.0.0 2026-04-14
 * @param string $emailAddress
 * @param mixed $linkContent
 * @param bool $validateEmail
 * @return void
 */
	function __construct( string $emailAddress, $linkContent = null, bool $validateEmail = true )
	{
		// Validate email address if requested
		if( $validateEmail && !filter_var( $emailAddress, FILTER_VALIDATE_EMAIL ) )
		{
			throw new \Exception( "Invalid email address: $emailAddress" );
		}
		
		// Build mailto URL
		$mailtoUrl = "mailto:" . $emailAddress;
		
		// If no content provided, use email address as link text
		if( $linkContent === null )
		{
			$linkContent = $emailAddress;
		}
		
		// Call parent HtmlA constructor - it handles string/HtmlElementInterface/null
		parent::__construct( $mailtoUrl, $linkContent );
	}
}
